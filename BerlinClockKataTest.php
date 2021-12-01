<<?php
require "BerlinClockKata.php";
use PHPUnit\Framework\TestCase;

class BerlinClockKataTest extends TestCase
{
    public function testBigBulbTimeOddShouldReturnO(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->sec("11:57:05");
        $this->assertEquals("O", $actual);
    }
    public function testMinutesL1ShouldReturnOneY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->minutesl1("11:05:05");
        $this->assertEquals("Y O O O O O O O O O O ", $actual);
    }

    public function testMinutesL1ShouldReturnTenY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->minutesl1("11:53:05");
        $this->assertEquals("Y Y Y Y Y Y Y Y Y Y O ", $actual);
    }

    public function testMinutesL2ShouldReturnTenY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->minutesl2("11:53:05");
        $this->assertEquals("Y Y Y O ", $actual);
    }
}
