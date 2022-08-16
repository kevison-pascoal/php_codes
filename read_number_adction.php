<?php
  $determinant = rand(50, 150);
  $number_one = rand(1, 100);
  $number_two = rand(1, 100);

  echo "\n------------------------------------------------------- \n";
  echo "The program generator numbers: \n";
  echo $number_one." and ".$number_two;
  
  $number_sum = $number_one + $number_two;
  echo "\n\nThe sum of those numbers is: ".$number_sum;
  
  if($number_sum > $determinant) {
    echo "\nNumber is than most then $determinant!";
  } else {
    echo "\nNumber is less than $determinant!";
  }
  echo "\n------------------------------------------------------- \n\n";
?>