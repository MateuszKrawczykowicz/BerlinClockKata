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
    public function testMinutesShouldReturnOneY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->minutes("11:05:05");
        $this->assertEquals("Y O O O O O O O O O O ", $actual);
    }

}
