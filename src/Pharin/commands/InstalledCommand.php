<?php namespace Pharin\Commands;

use Illuminate\Console\Command;

class InstalledCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'installed';

    /**
     * {@inheritdoc}
     */
    protected $description = 'List installed PAHRs.';

    /**
     * {@inheritdoc}
     */
    public function fire()
    {
        $this->line('toto');
    }

} 