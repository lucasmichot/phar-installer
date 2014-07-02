<?php

namespace Pharin\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
    protected function configure()
    {
        $this->setName('hello')->setDescription('Display a nice hello world');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello World');
    }
} 