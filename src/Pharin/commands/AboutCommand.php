<?php namespace Pharin\Commands;

use Illuminate\Console\Command;

class AboutCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'about';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Short information about Pharin';

    /**
     * {@inheritdoc}
     */
    public function fire()
    {
        $this->info('Pharin - A PHAR manager');
        $this->comment('See http://lucasmichot.github.io/pahrin for more information.');
    }

} 