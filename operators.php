<?php
	/*Arithematic Operators*/
	$num1 = 10;
	$num2 = 15.5;

	echo "Addition: " . ($num1+$num2);
	echo "<br/> Subtraction: " . ($num1-$num2);
	echo "<br/> Multiplication: " . ($num1*$num2);
	echo "<br/> Division: " . ($num1/$num2);
	echo "<br/> Remainder: " . ($num1 % $num2);


	/*String Operator*/
	$str_1 ="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum est obcaecati, possimus quis officia neque repudiandae molestiae vel, distinctio quod";
	$str_2 = " consequatur architecto tenetur aliquid ratione perspiciatis excepturi adipisci fuga delectus?";

	echo "<br />" . $str_1 . $str_2;

	/*Comparison Operator*/
	$x = 14;
	$y = 34;
	$z = '14';

	if($x == $z){
		echo '<br/> $x and $z are equal == ';
	}

	if($x === $z){
		echo '<br/> $x and $z are equal';	
	}

	if($y < $x){
		echo '<br/> $y is less than $x';
	}


	/*Increment Decrement operator*/
	$i = 0;
	echo "<br />";
	
	echo $i++;
	echo "<br />";
	
	$i = $i+1;
	echo $i;
	echo "<br />";
	
	echo ($i+=1);

	$i += 1;
	echo $i;
	echo "<br />";


/*conditional operator*/
	$var = ($x < $y) ? '' : '';
	echo $var;

?>