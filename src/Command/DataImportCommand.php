<?php
declare(strict_types=1);

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: self::NAME,
    description: 'Add a short description for your command',
)]
class DataImportCommand extends Command
{
    public const string NAME = 'app:data-import';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // Simulate long-running data processing
        $output->writeln('Processing data...');

//        throw new \Exception('Simulated exception');
        // Simulate processing
        sleep(10);

        // Success
        $output->writeln('Data processing complete!');
        return Command::SUCCESS;
    }
}
