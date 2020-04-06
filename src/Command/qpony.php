<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Controller\InputController;

class qpony extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'qpony';

    protected function configure()
    {
    $this
        // the short description shown while running "php bin/console list"
        ->setDescription('Zadanie rekrutacyjne firmy Qpony.')

        // the full command description shown when running the command with
        // the "--help" option
        ->setHelp('Program pobiera jako parametr liczbę naturalną i wylicza dla niej wartość wyjściową.')
        // parametr wejściowy
        ->addArgument('inp', InputArgument::OPTIONAL, 'Podaj liczbę.')
    ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if ($inp = $input->getArgument('inp')) {
            $output->writeln(InputController::series($inp));
        }

        return 0;
    }
}






