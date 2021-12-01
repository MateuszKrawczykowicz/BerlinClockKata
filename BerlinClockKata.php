<?php

class BerlinClockKata
{
    public function sec(string $number):string{
        if(intval($number[7]) % 2 == 0){
            return 'Y';
        } else{
            return 'O';
        }
    }
    public function minutes(string $number):string{
        $out="";
        $nbrmin = 0;
        $nbrmin += intval($number[3]) *10;
        $nbrmin += intval($number[4]) ;
        for ($x = 0 ; $x<=10; $x++){
            if ($nbrmin>=5){
                $out = $out . "Y ";
                $nbrmin -=5;
            } else{
                $out = $out . "O ";
            }
        }
        return $out;
    }

}