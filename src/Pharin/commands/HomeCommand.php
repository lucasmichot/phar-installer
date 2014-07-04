<?php namespace Pharin\Commands;

use Symfony\Component\Console\Input\InputArgument;

class HomeCommand extends BaseCommand
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'home';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Go to the website of a PHAR.';

    /**
     * {@inheritdoc}
     */
    protected function getArguments()
    {
        return array(
            array('phar-name', InputArgument::REQUIRED, 'The name of the PHAR.'),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getHelp()
    {
       return 'The phar-name parameter must be an existing and referenced PHAR.';
    }

    /**
     * {@inheritdoc}
     */
    public function fire()
    {
        //shell_exec('open http://phpunit.de');
    }

} 