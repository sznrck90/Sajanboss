<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-06-05 15:29:17
 * @Organization: Knockout System Pvt. Ltd.
 */

$conn = mysqli_connect("localhost",'root',"") OR die('Error in database connection');
$db = mysqli_select_db($conn,"php_advanced") or die(mysqli_error($conn));
?>
