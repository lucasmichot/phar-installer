<?php namespace Pharin\Commands;

class SelfUpdateUndashedCommand extends SelfUpdateCommand
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'selfupdate';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Updates pharin.phar to the latest version.';

} 