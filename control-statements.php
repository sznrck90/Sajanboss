<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-05-16 15:44:48
 * @Organization: Knockout System Pvt. Ltd.
 */

$x = 5;
$y = 15;

/*If else*/
if( $x < $y) {
	echo '$x is less than $y';
} else if($x == $y){
	echo '$x and $y are equal';
} else {
	echo '$x is greater than $y';
}

echo "<br/>";

if($x<$y):
	echo '$x is less than $y';
elseif($x==$y):
	echo '$x and $y are equal';
else:
	echo '$x is greater than $y';
endif;

echo "<br/>";
/*Switch Statements*/
echo "Switch Statement";
echo '<hr/>';
$a = 4;
switch($a){
	case 1:
		echo '$a is equal to 1';
		break;
	case 2:
		echo '$a is equal to 2';
		break;
	case 4:
		echo '$a is equal to 4';
		break;
	case 5:
		echo '$a is equal to 5';
		break;
	default:
		echo '$a is equal to '.$a;
		break;
}


/*Loops*/
$i = 1;
echo "<hr/>";
echo "While Loop";
echo "<hr/>";
while($i<=10){
	echo $i."&nbsp;";
	$i++;
}

echo "<hr/>";
echo "Do While Loop";
echo "<hr/>";
//$i =1;
do{
	echo $i."&nbsp;";
	$i++;
}while($i<=10);

/*For Loop*/
echo "<hr/>";
echo "For Loop";
echo "<hr/>";
for($i=1; $i<=10; $i++){
	echo $i;
}

/*Foreach loop*/
echo "<hr/>";
echo "Foreach Loop";
echo "<hr/>";
$all_student_array = array(
						"student_1" => array(
							"name" => array(
								"first_name" => "john",
								"middle_name" => '',
								"last_name" => "doe"),
							"roll_no" => 5,
							"class" => "BBA",
							"email" => "johndoe@gmail.com",
							"address" => "Kathmandu, Nepal"
						),
						"student_2" => array(
							"name" => "Ram Krishna",
							"roll_no" => 12,
							"class" => "BBS",
							"email" => "ram@gmail.com",
							"address" => "Lalitpur, Nepal"
						),
						"student_3" => array(
							"Sitaram Kattel",
							23,
							"BIM",
							"sitaram@yahoo.com",
							"Bhaktapur, Nepal"),
						"student_4" => array(
							"Hareram",
							43,
							"BBS",
							"hareram@outlook.com",
							"Nuwakot, Nepal")
					);
	
	$array = array(1,2,3,4,5,6,7,8,9,10);

	foreach($all_student_array as $key => $info){
		//echo $key."&nbsp;";
		/*echo $value['name'];
		echo "<pre>";
		print_r($value);
		echo "</pre>";
		echo "<hr/>";*/
		if(is_array($info)){
			foreach ($info as $key_1 => $value_1) {
				if(is_array($value_1)){
					$value_1['first_name'];
				}

			}
		} else {}


	}
		
?>
