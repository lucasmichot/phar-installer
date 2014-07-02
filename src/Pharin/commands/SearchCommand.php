<?php namespace Pharin\Commands;

use Illuminate\Console\Command;

class SearchCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'search';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Search PHARs.';

    /**
     * {@inheritdoc}
     */
    public function fire()
    {
        $this->line('toto');
    }

} 