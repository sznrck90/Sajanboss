<?php
$array = array("this", "is","a","sentence");

$string1 = implode(" ", $array);

echo $string1."<br />";

$json_obj = json_encode($array);

$ser = serialize($array); // mostly used in submitting form using ajax or jquery

echo $json_obj."<br />".$ser;

?>
