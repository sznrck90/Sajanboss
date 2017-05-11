<?php
	/*Array And Its functions*/
	$student_array = array("John Doe",5,"BBA","johndoe@gmail.com","Kathmandu, Nepal");


	echo "Name: ".$student_array[0];
	echo "<br/>Roll No. :".$student_array[1];	
	echo "<br/>Class :".$student_array[2];	
	echo "<br/>Email :".$student_array[3];	
	echo "<br/>Address :".$student_array[4];	
	echo "<hr />";

	$all_student_array = array(
							array(
								"name" => "John Doe",
								"roll_no" => 5,
								"class" => "BBA",
								"email" => "johndoe@gmail.com",
								"address" => "Kathmandu, Nepal"
							),
							array(
								"name" => "Ram Krishna",
								"roll_no" => 12,
								"class" => "BBS",
								"email" => "ram@gmail.com",
								"address" => "Lalitpur, Nepal"
							),
							array(
								"Sitaram Kattel",
								23,
								"BIM",
								"sitaram@yahoo.com",
								"Bhaktapur, Nepal"),
							array(
								"Hareram",
								43,
								"BBS",
								"hareram@outlook.com",
								"Nuwakot, Nepal")
						);

	echo "Name: ".$all_student_array[0]['name'];
	echo "<br/>Roll No. :".$all_student_array[0]['roll_no'];	
	echo "<br/>Class :".$all_student_array[0]['class'];	
	echo "<br/>Email :".$all_student_array[0]['email'];	
	echo "<br/>Address :".$all_student_array[0]['address'];	



	echo "<br/>Name: ".$all_student_array[1]['name'];
	echo "<br/>Roll No. :".$all_student_array[1]['roll_no'];	
	echo "<br/>Class :".$all_student_array[1]['class'];	
	echo "<br/>Email :".$all_student_array[1]['email'];	
	echo "<br/>Address :".$all_student_array[1]['address'];	

	echo "<hr />";


	$student_array_single = array(
								"name" => "John Doe",
								"roll_no" => 5,
								"class" => "BBA",
								"email" => "johndoe@gmail.com",
								"address" => "Kathmandu, Nepal");

	echo $student_array_single['roll_no'];
	echo "<hr />";
/*	echo "<pre>";
	print_r($all_student_array);
	var_dump($all_student_array);
	echo "</pre>";
*/
	echo "To get array length: count() function is used. <br />";

	$count = count($all_student_array);
	echo $count;

	/*TO get first element of array*/
	/*echo "<br />";
	echo "<br />";
	$first_elem = array_shift($all_student_array);
	echo "<pre>";
	print_r($first_elem);
	print_r($all_student_array);
	echo "</pre>";
	$last_elem = array_pop($all_student_array);
	echo "<pre>";
	print_r($last_elem);
	print_r($all_student_array);
	echo "</pre>";*/

	$int_array = array(12,3,6,67,87,324,12,24,90);
	$str_array = array('z','x','c','a','j','y','u');

	sort($int_array);
	sort($str_array);

	echo "<pre>";
	print_r($int_array);
	print_r($str_array);
	echo "</pre>";

	/*Array Merge*/
	// $merge_array = array_push($int_array, $str_array); //Total count of elements in first argument

	$int_array[] = $str_array;

	echo "<pre>";
	print_r($int_array);
	echo "</pre>";

	$merge_array = array_merge($int_array,$str_array);
	sort($merge_array);
	echo "<pre>";
	print_r($merge_array);
	echo "</pre>";

	/*implode(), explode(),
	 array_slice(), array_splice(),
	 array_chunk(), empty() */
?>	