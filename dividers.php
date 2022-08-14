<?php
  $number_random = rand(1, 1000000);
  $aux = 0;
  
  echo "\n-------------------------------------------------------\n\n";
  
  echo "Number $number_random is dividers of:\n";

  for($i = 0; $i < $number_random; $i++) {
    $numbers[$i] = $i + 1; 
  }

  for($i = 0; $i < count($numbers); $i++) {
    if($number_random % $numbers[$i] === 0) {
      echo "$numbers[$i] ";
      $aux++;
    }
    if($aux > 10) {
      echo "\n";
      $aux = 0;
    }
  }

  echo "\n\n-------------------------------------------------------\n\n";
?>