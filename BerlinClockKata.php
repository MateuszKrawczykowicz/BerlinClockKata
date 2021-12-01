<?php

class BerlinClockKata
{
    public function firstLight(int $number):string
    {
        if($number % 2 == 0){
            return 'A';
        } else{
            return 'E';
        }
    }

}