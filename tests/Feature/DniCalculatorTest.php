<?php
namespace Tests\Feature;

use App\Services\DniCalculator;
use PHPUnit\Framework\TestCase;

class DniCalculatorTest extends TestCase
{
    public function testCalcularLetter()
    {
        $calculator = new DniCalculator();
        $dni = "12345678";
        $letter = $calculator->calcularLetter($dni);
        $this->assertEquals("Z", $letter);
    }

    public function testCalcularLetraConRestoIgualA23()
    {
        $calculator = new DniCalculator();
        $dni = "99999999";
        $letter = $calculator->calcularLetter($dni);
        $this->assertEquals("R", $letter);
    }

    public function testCalcularLetterWithInvalidDni()
    {
        $this->expectException(\InvalidArgumentException::class);
        $calculator = new DniCalculator();
        $dni = "invalid_dni";
        $calculator->calcularLetter($dni);
    }
}