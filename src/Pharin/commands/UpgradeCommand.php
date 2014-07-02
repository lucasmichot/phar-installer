<?php namespace Pharin\Commands;

use Illuminate\Console\Command;

class UpgradeCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'upgrade';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Upgrade a PHAR to its latest stable version.';

    /**
     * {@inheritdoc}
     */
    public function fire()
    {
        $this->line('toto');
    }

} 