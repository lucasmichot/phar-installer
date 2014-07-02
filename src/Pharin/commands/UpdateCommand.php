<?php namespace Pharin\Commands;

use Illuminate\Console\Command;

class UpdateCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'update';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Upgrade the list of available PHARs.';

    /**
     * {@inheritdoc}
     */
    public function fire()
    {
        $this->line('toto');
    }

} 