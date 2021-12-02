<<?php
require "BerlinClockKata.php";
use PHPUnit\Framework\TestCase;

class BerlinClockKataTest extends TestCase
{
    // test sec
    public function testBigBulbTimeOddShouldReturnO(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->sec("11:57:05");
        $this->assertEquals("O", $actual);
    }

    public function testBigBulbTimeEvenShouldReturnY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->sec("11:57:04");
        $this->assertEquals("Y", $actual);
    }

    // test min bloc
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

    public function testBlockMinShouldReturnTwoY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockMin("11:10:00");
        $this->assertEquals("Y Y O O O O O O O O O ", $actual);
    }

    public function testBlockMinShouldReturnThreeY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockMin("11:19:59");
        $this->assertEquals("Y Y Y O O O O O O O O ", $actual);
    }

    public function testBlockMinShouldReturnFourY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockMin("11:23:59");
        $this->assertEquals("Y Y Y Y O O O O O O O ", $actual);
    }

    public function testBlockMinShouldReturnFiveY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockMin("11:26:12");
        $this->assertEquals("Y Y Y Y Y O O O O O O ", $actual);
    }

    public function testBlockMinShouldReturnSixY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockMin("11:33:22");
        $this->assertEquals("Y Y Y Y Y Y O O O O O ", $actual);
    }

    public function testBlockMinShouldReturnSevenY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockMin("11:35:22");
        $this->assertEquals("Y Y Y Y Y Y Y O O O O ", $actual);
    }

    public function testBlockMinShouldReturnEightY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockMin("11:40:22");
        $this->assertEquals("Y Y Y Y Y Y Y Y O O O ", $actual);
    }

    public function testBlockMinShouldReturnNineY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockMin("11:45:22");
        $this->assertEquals("Y Y Y Y Y Y Y Y Y O O ", $actual);
    }

    public function testBlockMinShouldReturnTenY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockMin("11:53:05");
        $this->assertEquals("Y Y Y Y Y Y Y Y Y Y O ", $actual);
    }

    public function testBlockMinShouldReturnElevenY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockMin("11:59:22");
        $this->assertEquals("Y Y Y Y Y Y Y Y Y Y Y ", $actual);
    }

    // test min simple
    public function testSimpleMinShouldReturnZeroY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->simpleMin("11:30:05");
        $this->assertEquals("O O O O ", $actual);
    }

    public function testSimpleMinShouldReturnOneY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->simpleMin("11:51:05");
        $this->assertEquals("Y O O O ", $actual);
    }

    public function testSimpleMinShouldReturnTwoY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->simpleMin("11:52:05");
        $this->assertEquals("Y Y O O ", $actual);
    }

    public function testSimpleMinShouldReturnThreeY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->simpleMin("11:53:05");
        $this->assertEquals("Y Y Y O ", $actual);
    }

    public function testSimpleMinShouldReturnFourY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->simpleMin("11:54:05");
        $this->assertEquals("Y Y Y Y ", $actual);
    }

    public function test2SimpleMinShouldReturnOneY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->simpleMin("11:56:05");
        $this->assertEquals("Y O O O ", $actual);
    }

    public function test2SimpleMinShouldReturnTwoY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->simpleMin("11:57:05");
        $this->assertEquals("Y Y O O ", $actual);
    }

    public function test2SimpleMinShouldReturnThreeY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->simpleMin("11:58:05");
        $this->assertEquals("Y Y Y O ", $actual);
    }

    public function test2SimpleMinShouldReturnFourY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->simpleMin("11:59:05");
        $this->assertEquals("Y Y Y Y ", $actual);
    }

    // test hours bloc
    public function testBlockHourShouldReturnZeroY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockHour("00:23:05");
        $this->assertEquals("O O O O ", $actual);
    }

    public function testBlockHourShouldReturnOneY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockHour("05:53:05");
        $this->assertEquals("Y O O O ", $actual);
    }

    public function testBlockHourShouldReturnTwoY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockHour("10:53:05");
        $this->assertEquals("Y Y O O ", $actual);
    }

    public function testBlockHourShouldReturnThreeY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockHour("15:53:05");
        $this->assertEquals("Y Y Y O ", $actual);
    }

    public function testBlockHourShouldReturnFourY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->blockHour("22:53:05");
        $this->assertEquals("Y Y Y Y ", $actual);
    }

    public function testSimpleHourShouldReturnZeroY(){
        $firstLight = new BerlinClockKata();
        $actual = $firstLight->simpleHour("10:53:05");
        $this->assertEquals("O O O O ", $actual);
    }



    // test Clock
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
