<?php

namespace App\Services;

class DniService
{
    public function calculateLetter($number)
    {
        if (!is_numeric($number) || strlen($number) != 8) {
            throw new \InvalidArgumentException("Invalid DNI number");
        }
        
        $letters = "TRWAGMYFPDXBNJZSQVHLCKE";
        $index = $number % 23;
        return $letters[$index];
    }
}