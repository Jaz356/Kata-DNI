<?php

namespace Tests\Feature;

use App\Services\DniCalculator;
use PHPUnit\Framework\TestCase;


class DniCalculatorTest extends TestCase
{
    public function testCalcularLetter()
    {
        $calculator = new DniCalculatorTest();
        $dni = "12345678";
        $letter = $calculator->calcularLetter($dni);
        $this->assertEquals("T", $letter);
    }

    public function testCalcularLetraConRestoIgualA23()
    {
        $calculator = new DniCalculatorTest();
        $dni = "99999999";
        $letter = $calculator->calcularLetter($dni);
        $this->assertEquals("E", $letter);
    }
}