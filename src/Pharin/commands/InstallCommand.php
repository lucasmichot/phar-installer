<?php namespace Pharin\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'install';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Install a PHAR.';

    /**
     * {@inheritdoc}
     */
    public function fire()
    {
        $this->line('toto');
    }

} 