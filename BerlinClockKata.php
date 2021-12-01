<?php

class BerlinClockKata
{
    // Étape 1 : implémenter la ligne des simples minutes
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

    // Etape 2 : implémenter la ligne des blocs de 5 minutes
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

    // Etape 3 : implémenter la ligne des heures simples
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

    // Etape 4 : implémenter la ligne des blocs de 5 heures
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

    //Etape 6 : implémenter la lampe des secondes
    public function sec(string $number):string{
        if(intval($number[7]) % 2 == 0){
            return 'Y';
        } else{
            return 'O';
        }
    }






}