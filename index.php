<?php
	/*Data types in PHP*/

	echo "String Data types";
	echo "<hr />"; // horizontal line

	$string = "This is string variable";
	$string_1 = 'This is string variable';
	echo $string;
	
	echo "<br/>"; //Line Break
	echo $string_1;
	echo "<br/>";

	echo "$string"; // This is string variable

	echo '$string'; // $string
	echo "<br/>";

	echo "Number Data types";
	echo "<hr />";

	$num = 123;
	$num_1 =12.3;
	echo $num;
	echo "<br />";
	echo $num_1;
	echo "<br />";

	$string = 123.45;
	
	
	echo $string;
	echo "<br />";

	echo "Array Data types";
	echo "<hr />";

	$array = array( 1, 2, 3, 4, 5, 6);
	echo $array[4];
	
	/*Saroj Shrestha */
	echo "just testing ";
$string_1 = "Lorem \"ipsum dolor sit amet, consectetur adipisicing elit\". Nam porro maxime 'repudiandae reprehenderit' autem mollitia adipisci assumenda, sapiente similique. Amet quam dicta rerum earum ad. Voluptatibus praesentium voluptas vitae at!";

$string_2 ='Lorem \'ipsum dolor sit amet\', consectetur adipisicing elit. Fugit facere nesciunt ducimus culpa repellat et sunt! Quas aliquam, maxime repudiandae doloribus reprehenderit? Culpa explicabo nemo possimus, pariatur. Dolores, nobis, fugiat.';
	
	$html1 = "<p align='center'>This is paragraph Tag.</p>";
	$html = "<img width='100%' src='assets/images/chauka.jpg' />";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>This is Index page</title>
</head>
<body>
	<div>
		<?php echo $html1; ?>
	</div>
	<div>
		<?php
			echo $html;
			/*PHP Constants*/
			define('PI',3.14);

			/*define("PI",3.14);*/

			const PI_1 = 3.14;
			echo PI;

			echo PI_1;
		?>
	</div>
</body>
</html>
