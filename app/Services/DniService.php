<?php

namespace App\Services;

class DniService
{
    public function calculateLetter($number)
    {
        $letters = "TRWAGMYFPDXBNJZSQVHLCKE";
        $index = $number % 23;
        return $letters[$index];
    }
}