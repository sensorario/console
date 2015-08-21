<?php

namespace Sensorario\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class Console extends Command
{
    protected function configure()
    {
        $this
            ->setName('sensorario:console')
            ->setDescription('A tool to manage istat codes')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Console');
    }
}
