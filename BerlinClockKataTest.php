<<?php
require "BerlinClockKata.php";
use PHPUnit\Framework\TestCase;

class BerlinClockKataTest extends TestCase
{
    public function testTimeOddShouldReturnE(){
        $firstLight = new BerlinClockKata();

        $actual = $firstLight->firstLight(11);

        $this->assertEquals("E", $actual);
    }
}
