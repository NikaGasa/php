<?php

    $number_1 = (int)readline("input number from 1 till 100: ");
   $number_2 = (int)readline("input number from 1 till 100: ");
   
   echo $number_1 . "\n";
   echo($number_2. "\n");
   
    if ($number_1 >100 or $number_2 > 100){
      echo "Numbers must be between 1 and 100";
    }elseif($number_1 == 0 or $number_2 == 0){
      return false;
    }else{
        echo ($number_1 * $number_2);
  }
    
?>
