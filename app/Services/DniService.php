<?php

namespace App\Services;

class DniService
{
    /**
     * DNI letter table.
     */
    protected $letters = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];

    /**
     * Calculates the DNI letter based on the number.
     *
     * @param int $number
     * @return string
     */
    public function calculateLetter(int $number): string
    {
        $index = $number % 23;
        return $this->letters[$index];
    }
}