<?php

    function divide($divider, $dividend) {

        if ($dividend == 0){
            throw new InvalidArgumentException("Divide by zero error");
        }

         if ($dividend < 0){
            throw new OutOfRangeException ("Divide is lower than zero");
        }

        return $dividend / $divider;

    }

    function randomDivide($tryNumber){
      $counterEI = 0;
      $counterEO = 0;
        for ($n = 0; $n < $tryNumber; $n++){
            try{
              echo divide(5, rand(-10,10)).'</br>';
            }catch(InvalidArgumentException $eI){
              $counterEI++;
            }catch(OutOfRangeException $eO){
              $counterEO++;
            }
      }
        echo 'InvalidArgumentException wystapienia : '.$counterEI.'<br>';
        echo 'OutOfRangeException wystapienia : '.$counterEO.'<br>';
        echo "doszlismy do konca";
    }
    randomDivide(24);
