<?php namespace Pharin\Commands;

use Illuminate\Console\Command;

class RemoveCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'remove';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Remove a PHAR.';

    /**
     * {@inheritdoc}
     */
    public function fire()
    {
        $this->line('toto');
    }

} 