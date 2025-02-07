<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;
use App\Services\DniService;


class DniServiceTest extends TestCase
{
    protected $dniService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->dniService = new DniService();
    }

    public function testCalculateLetterWithValidDni()
    {
        $this->assertEquals('Z', $this->dniService->calculateLetter(12345678));
        $this->assertEquals('X', $this->dniService->calculateLetter(87654321));
        $this->assertEquals('S', $this->dniService->calculateLetter(12345679));
    }

    public function testCalculateLetterWithInvalidDni()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->dniService->calculateLetter('1234567A');
    }

    public function testCalculateLetterWithShortDni()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->dniService->calculateLetter(1234567);
    }

    public function testCalculateLetterWithLongDni()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->dniService->calculateLetter(123456789);
    }
}