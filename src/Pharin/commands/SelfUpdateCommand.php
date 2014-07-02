<?php namespace Pharin\Commands;

use Herrera\Phar\Update\Manager;
use Herrera\Phar\Update\Manifest;
use Illuminate\Console\Command;

class SelfUpdateCommand extends Command
{
    const MANIFEST_FILE = 'http://lucasmichot.github.io/pharin/manifest.json';

    /**
     * {@inheritdoc}
     */
    protected $name = 'self-update';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Updates pharin.phar to the latest version.';

    /**
     * {@inheritdoc}
     */
    public function fire()
    {
        $manager = new Manager(Manifest::loadFile(self::MANIFEST_FILE));
        $manager->update($this->getApplication()->getVersion(), true);
    }
}
