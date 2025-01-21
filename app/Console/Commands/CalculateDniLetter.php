<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\DniService;

Class CalculateDniLetter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dni:calculate {number : The DNI number (8 digits)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculates the corresponding letter for a DNI number';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Get the number from the argument
        $number = $this->argument('number');

        // Validate the number
        if (!is_numeric($number) || strlen($number) != 8) {
            $this->error('The DNI must have exactly 8 digits.');
            return Command::FAILURE;
        }

        // Use the service to calculate the letter
        $dniService = new DniService();
        $letter = $dniService->calculateLetter($number);

        // Display the result
        $this->info("The DNI $number has the letter: $letter");

        return Command::SUCCESS;
    }
}