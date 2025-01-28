<?php

namespace App\Services;

class DniCalculator
{
    public function calcularLetter(string $dni): string
    {
        // Example implementation
        $letters = "TRWAGMYFPDXBNJZSQVHLCKE";
        $index = intval($dni) % 23;
        return $letters[$index];
    }
}
