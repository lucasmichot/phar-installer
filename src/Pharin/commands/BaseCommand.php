<?php namespace Pharin\Commands;

use Exception;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class BaseCommand extends Command
{
    /**
     * User home.
     *
     * @var string
     */
    protected $home;

    /**
     * Pharin folder.
     *
     * @var string
     */
    protected $pharin;

    /**
     * Folders for PHARs
     *
     * @var string
     */
    protected $phars;

    /**
     * Cache file.
     *
     * @var string
     */
    protected $cache;

    /**
     * Update URL.
     *
     * @var string
     */
    protected $url;

    /**
     * All available PHARs.
     *
     * @var array
     */
    protected $all;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->home   = getenv('HOME');
        $this->pharin = $this->home.'/.pharin';
        $this->phars  = $this->pharin.'/phars';
        $this->cache  = $this->pharin.'/cache.json';
        $this->url    = 'https://raw.githubusercontent.com/lucasmichot/phar-installer/master/phars/phpunit.json';

        $content      = json_decode(file_get_contents($this->cache), true);
        $this->all    = $content['content'];

        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function run(InputInterface $input, OutputInterface $output)
    {
        $this->input = $input;

        $this->output = $output;

        try
        {
            return parent::run($input, $output);
        }
        catch (Exception $e)
        {
            $this->error(sprintf('An error has occured : "%s"', $e->getMessage()));
            $this->comment(sprintf('Normal usage is "pharin %s"', $this->getSynopsis()));
            $this->comment(sprintf('Please type "pharin help %s" for more information', $this->getName()));
        }
    }
} 