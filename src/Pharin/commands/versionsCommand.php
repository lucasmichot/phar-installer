<?php namespace Pharin\Commands;

use Illuminate\Console\Command;

class VersionsCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'versions';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Display available versions for a PHAR.';

    /**
     * {@inheritdoc}
     */
    public function fire()
    {
        $this->line('toto');
    }

} 