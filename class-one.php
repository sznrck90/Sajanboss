<?php
  echo "hello";

  $string = "String 1";

  echo "$string"; // String 1
  echo '$string';// $string

  /*Special Character*/
  // __FILES__ ,
  // __DIR__ ,
  //@ error supressor
  // ! negation
  //$ variable
  // && logical AND
  //||  "      OR
  // variable names cannot be : class , this

  // Data Types
  // 1. String
  // 2. Number
  // 3. Array
  // 4. Object
  // 5. Resource

  $array_var = array(1,'string',3,array('a','b'));

  echo $array_var[2];

  print_r($array_var); // to print Array
  echo "<br />"; // prints array with types
  var_dump($array_var);

?>
