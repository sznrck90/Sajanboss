<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-05-30 15:24:40
 * @Organization: Knockout System Pvt. Ltd.
 */

$fp = fopen('test.jpg','w');
$data = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime facilis doloremque incidunt aperiam. Impedit id accusantium asperiores, at hic eum repudiandae facilis unde autem! Iusto tempore odit distinctio officiis accusamus.";
fwrite($fp, $data);
fclose($fp);

$fp = fopen("test.jpg", 'r');
$data = fread($fp,filesize("test.jpg"));

fclose($fp);
/*
$data = file_get_contents('test.dll');
echo $data;*/

//file_put_contents('test.dll', "test data");
?>
