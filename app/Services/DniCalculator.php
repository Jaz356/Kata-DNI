<?php

namespace App\Services;

class DniCalculator
{
    public function calcularLetter(string $dni): string
    {
        if (!is_numeric($dni) || strlen($dni) != 8) {
            throw new \InvalidArgumentException("Invalid DNI provided");
        }
        // Example implementation
        $letters = "TRWAGMYFPDXBNJZSQVHLCKE";
        $index = intval($dni) % 23;
        return $letters[$index];
    }
}
