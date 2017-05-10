<?php
	echo 'Hello World';
	echo "<br/>";
	$string ="string 1";
	echo "$string"; //string 1
	echo "<br/>";
	echo '$string'; //$string
	echo "<br/>";

	
	/*Special Characters*/
	// __FILES__ - Current file find out, __DIR__ - current directory find out, @ - Error Supression, ! - Negation, $ - Variable declaration, && - Logical AND,  || - Logical OR, class, this

	/* Data Types*/
	/*
	1. String
	2. Number
	3. Array
	4. Objects
	5. Resource
	*/

	$str='String';
	echo $str;
	echo "<br/>";

	$str="Value";
	echo $str;
	echo "<br/>";

	$num = 12345;
	echo $num;
	echo "<br/>";

	$float = 1234.678;
	echo $float;
	echo "<br/>";

	$str = 1234.678;
	echo $str;
	echo "<br/>";

	echo "Array";
	echo "<hr/>";

	$array_var = array (1,'string', 3, array('a','b'));
	echo $array_var[1];
	echo "<br/>";

	print_r($array_var);
	echo "<br/>";
	var_dump($array_var);
	echo "<br/>";
?>