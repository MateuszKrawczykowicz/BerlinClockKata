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
    public function testBlockMinShouldReturnOneY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockMin("11:05:05");
        $this->assertEquals("Y O O O O O O O O O O ", $actual);
    }

    public function testBlockMinShouldReturnZeroY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockMin("11:04:05");
        $this->assertEquals("O O O O O O O O O O O ", $actual);
    }

    public function testBlockMinShouldReturnTenY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockMin("11:53:05");
        $this->assertEquals("Y Y Y Y Y Y Y Y Y Y O ", $actual);
    }

    public function testSimpleMinShouldReturnThreeY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->simpleMin("11:53:05");
        $this->assertEquals("Y Y Y O ", $actual);
    }

    public function testSimpleHourShouldReturnOneY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->simpleHour("11:53:05");
        $this->assertEquals("Y O O O ", $actual);
    }

    public function testBlockHourShouldReturnFourY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockHour("22:53:05");
        $this->assertEquals("Y Y Y Y ", $actual);
    }

    // function Clock
    public function testClock1(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->clock("22:53:05");
        $this->assertEquals("O\nY Y Y Y \nY Y O O \nY Y Y Y Y Y Y Y Y Y O \nY Y Y O ", $actual);
    }

    public function testClock2(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->clock("01:00:00");
        $this->assertEquals("Y\nO O O O \nY O O O \nO O O O O O O O O O O \nO O O O ", $actual);
    }

    public function testClock3(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->clock("11:11:11");
        $this->assertEquals("O\nY Y O O \nY O O O \nY Y O O O O O O O O O \nY O O O ", $actual);
    }

    public function testClock4(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->clock("09:59:59");
        $this->assertEquals("O\nY O O O \nY Y Y Y \nY Y Y Y Y Y Y Y Y Y Y \nY Y Y Y ", $actual);
    }

    public function testClock5(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->clock("10:00:00");
        $this->assertEquals("Y\nY Y O O \nO O O O \nO O O O O O O O O O O \nO O O O ", $actual);
    }

    public function testClock6(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->clock("00:00:00");
        $this->assertEquals("Y\nO O O O \nO O O O \nO O O O O O O O O O O \nO O O O ", $actual);
    }
}
