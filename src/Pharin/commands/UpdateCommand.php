<?php namespace Pharin\Commands;

use Exception;
use GuzzleHttp\Client;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

class UpdateCommand extends BaseCommand
{

    /**
     * Filesystem
     *
     * @var Filesystem
     */
    protected $fs;

    /**
     * {@inheritdoc}
     */
    protected $name = 'update';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Get the list of available PHARs.';

    /**
     * {@inheritdoc}
     */
    public function fire()
    {
        $this->EnsureDefaultStructureExists();

        $this->updateIfNotModified();
    }

    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->fs = new Filesystem();
    }

    /**
     * Create the files and folders structure.
     */
    private function EnsureDefaultStructureExists()
    {
        // create .pharin folder
        if (! $this->fs->exists($this->pharin))
        {
            $this->fs->mkdir($this->pharin);
        }

        // create .pharin/phars folder
        if (! $this->fs->exists($this->phars))
        {
            $this->fs->mkdir($this->phars);
        }

        // create an empty cache file
        if (! $this->fs->exists($this->cache))
        {
            $data = array(
                'etag'    => null,
                'content' => null,
            );

            $this->fs->dumpFile($this->cache, json_encode($data));
        }
    }

    /**
     * Update cache is not modified.
     */
    private function updateIfNotModified()
    {
        $cache = json_decode(file_get_contents($this->cache), true);

        try
        {
            $client = new Client();

            $response = $client->get($this->url, array(
                'headers' => array('If-None-Match' => '"'.$cache['etag'].'"'),
            ));

            switch ($response->getStatusCode())
            {
                case 200:
                    $this->fs->dumpFile($this->cache, json_encode(array(
                        'etag'    => trim($response->getHeader("ETag"), '"'),
                        'content' => $response->json(),
                    )));
                    $this->info('Pharin cache file has been successfully updated.');
                    break;

                case 304:
                    $this->info('Pharin cache file has been successfully checked : no change since last update.');
                    break;

                default:
                    $this->error(sprintf('An error has occured : "%s"', $response->getBody()));

            }
        }
        catch (Exception $e)
        {
            $this->error(sprintf('An error has occured : "%s"', $e->getMessage()));
        }
    }

} 