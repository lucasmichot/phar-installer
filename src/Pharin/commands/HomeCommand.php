<?php namespace Pharin\Commands;

use Illuminate\Console\Command;

class HomeCommand extends Command
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
    public function fire()
    {
        shell_exec ('open http://phpunit.de');
    }

} 