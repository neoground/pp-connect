<?php
/**
 * This file contains a console command.
 */

namespace PentaPaper\Connect\Jobs\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Demo
 *
 * Demo console command
 */
class Demo extends Command
{

    /**
     * The configuration
     */
    protected function configure()
    {
        $this->setName("ppc:run")
            ->setDescription("Run demo command");
    }

    /**
     * The execution
     *
     * @param InputInterface   $input
     * @param OutputInterface  $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Hello world!");
        return self::SUCCESS;
    }
}