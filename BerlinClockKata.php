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
    public function blockMin(string $number):string{
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

    public function simpleMin(string $number):string{
        $out="";
        $nbrmin = 0;
        $nbrmin += intval($number[3]) *10;
        $nbrmin += intval($number[4]) ;
        $nbrmin = $nbrmin%5;
        for ($x = 0 ; $x<=3; $x++){
            if ($nbrmin>=1){
                $out = $out . "Y ";
                $nbrmin -=1;
            } else{
                $out = $out . "O ";
            }
        }
        return $out;
    }

    public function simpleHour(string $number):string{
        $out="";
        $nbrhour = 0;
        $nbrhour += intval($number[0]) *10;
        $nbrhour += intval($number[1]) ;
        $nbrhour = $nbrhour%5;
        for ($x = 0 ; $x<=3; $x++){
            if ($nbrhour>=1){
                $out = $out . "Y ";
                $nbrhour -=1;
            } else{
                $out = $out . "O ";
            }
        }
        return $out;
    }

    public function blockHour(string $number):string{
        $out="";
        $nbrhour = 0;
        $nbrhour += intval($number[0]) *10;
        $nbrhour += intval($number[1]) ;
        for ($x = 0 ; $x<=3; $x++){
            if ($nbrhour>=5){
                $out = $out . "Y ";
                $nbrhour -=5;
            } else{
                $out = $out . "O ";
            }
        }
        return $out;
    }

    //Etape 7 : intégrer l’horloge entière
    public function clock(string $number):string{
        $clock = "";
        $clock = $clock . $this->sec($number) . "\n" . $this->blockHour($number) . "\n" . $this->simpleHour($number) . "\n" . $this->blockMin($number) . "\n" . $this->simpleMin($number);
        return $clock;
    }
}