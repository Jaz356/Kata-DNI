<?php

namespace Tests\Feature;

use Tests\TestCase;

class CalculateDniLetterTest extends TestCase
{
    public function test_calculate_letter_valid_dni()
    {
        $this->artisan('dni:calculate', ['number' => '12345678'])
            ->expectsOutput('The DNI 12345678 has the letter: Z') // Replace 'Z' with the expected letter
            ->assertExitCode(0);
    }

    public function test_calculate_letter_invalid_dni()
    {
        $this->artisan('dni:calculate', ['number' => 'invalid_dni'])
            ->expectsOutput('The DNI must have exactly 8 digits.')
            ->assertExitCode(1);
    }

    public function test_calculate_letter_dni_with_less_than_8_digits()
    {
        $this->artisan('dni:calculate', ['number' => '1234567'])
            ->expectsOutput('The DNI must have exactly 8 digits.')
            ->assertExitCode(1);
    }

    public function test_calculate_letter_dni_with_more_than_8_digits()
    {
        $this->artisan('dni:calculate', ['number' => '123456789'])
            ->expectsOutput('The DNI must have exactly 8 digits.')
            ->assertExitCode(1);
    }
}