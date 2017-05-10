<?php
	//Single line comment
	/*
		Multi line comment
	*/
	echo "Biru";
	echo "<br/>";
	//""
	//''
	$string1 = "biru";
	echo "$string1";//print biru
	echo "<br/>";
	echo 'string1';//print $string

	/*Special characters*/
	//_FILES_,_DIR_,@,!,$ & ||

	/*Data type
		1.String
		2.Number
		3.Array
		4.Objects
		5.Resource
	*/
		$str = 'String';
		echo $str;
		echo "<br/>";

		$str = "value";
		echo $str;
		echo "<br/>";

		$num = 1233456;
		echo $num;
		echo "<br/>";

		$float = 123.456;
		echo $float;
		echo "<br/>";

		echo "Array";
		echo "<hr/>";

		$array_var = array(1,'string',3,array('a','b'));
		echo $array_var[2];

		print_r($array_var);
		echo "<br/>";
		
		var_dump($array_var);
		echo "<br/>";

?>
<!--  Html comment
	multi line comment
-->