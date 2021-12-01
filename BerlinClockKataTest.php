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
    public function testMinutesBlockMinShouldReturnOneY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockMin("11:05:05");
        $this->assertEquals("Y O O O O O O O O O O ", $actual);
    }

    public function testMinutesBlockMinShouldReturnZeroY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockMin("11:04:05");
        $this->assertEquals("O O O O O O O O O O O ", $actual);
    }

    public function testMinutesSimpleMinShouldReturnThreeY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->simpleMin("11:53:05");
        $this->assertEquals("Y Y Y O ", $actual);
    }
}
