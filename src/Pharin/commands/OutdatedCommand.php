<?php namespace Pharin\Commands;

use Illuminate\Console\Command;

class OutdatedCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'outdated';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Display outdated PAHRs.';

    /**
     * {@inheritdoc}
     */
    public function fire()
    {
        $this->line('toto');
    }

} 