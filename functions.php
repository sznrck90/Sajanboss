<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-05-24 15:20:51
 * @Organization: Knockout System Pvt. Ltd.
 */

	/*function add_number($x, $y=10, $z=0){
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
*/

	function debugger($variable, $isDie=false){
		echo "<pre>";
		print_r($variable);
		echo "</pre>";
		if($isDie){
			exit;
		}
	}


	/*Date and time*/
	$date = date('Y-m-d h:i:s A');	//2017-05-23 3:35 PM
	$current_timestamp = strtotime($date);


	$previous_day = date('Y-m-d h:i:s A',strtotime($date." -1 days"));
	echo $previous_day;

	$string = "lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, nesciunt error voluptatibus saepe sit eum id, a optio aliquid doloribus ipsa enim itaque dignissimos repellendus illo eveniet? Animi, asperiores, fuga! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, beatae, quo. Accusamus illo, nobis corrupti vel laudantium hic, mollitia dolorem veritatis ipsa deserunt quae possimus, eligendi architecto iusto quaerat atque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. In culpa sequi quos, cupiditate quibusdam id nobis saepe similique a ab quia consectetur eveniet voluptate eos alias repudiandae repellendus? Omnis, assumenda?";
	$words = explode(" ",$string);
	debugger($words);

	$string_1 = implode(" ",$words);
	echo $string_1;

	$uppercase = strtoupper($string);
	debugger($uppercase);
	$lowercase = strtolower($string);
	debugger($lowercase);

	$first_capital = ucfirst($string);
	debugger($first_capital);

	$words_capital = ucwords($string);
	debugger($words_capital);

	$sub_string =  substr($string, -15, 10);
	echo $sub_string;

	/*md5();
	sha1();
	base64_encode();

	in_array();
	count();

	ceil();
	floor();
	rand();
*/
	$string_test = "Lorem";

echo $string_test;
		include 'home.php';
		//require 'home.php';

	
	echo $string_test;

	function testVariable(){
		global $string_test;
		echo $string_test;
	}

	testVariable();
?>
