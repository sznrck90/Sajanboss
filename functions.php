<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-05-24 15:20:51
 * @Organization: Knockout System Pvt. Ltd.
 */

	function add_number($x, $y=10, $z=0){
		$sum = $x+$y+$z;
		$x = $x+$sum;
		return $sum;
	}
	
	$x = 10;
	echo $x;		//10
	echo "<br>";
	$result = add_number($x, 15);
	echo "<br>";

	echo $result;		//25
	echo "<br>";
	echo $x;	//10
	echo "<br>";
	
	function sum_number(&$x, $y=10, $z=10){
		$sum = $x+$y+$z;
		$x = $x+$sum;
		//return $sum;
	}
	
	$x = 10;
	echo $x;		//10
	sum_number($x, 15);
	echo "<br>";
	echo $x;		//45

?>
