<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-05-30 15:42:11
 * @Organization: Knockout System Pvt. Ltd.
 */
ini_set('SMTP','smtp.wlink.com.np');
ini_set('smtp_port',25);

$headers = "";
$headers .= "MIME-Version: 1.0 \r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
$headers .= "X-Priority: 1 \r\n";
$headers .= "From: sandesh.bhattarai79@gmail.com";

$subject = "This is Subject";
$message = "<a href='http://localhost/broadway/advanced_php'>http://localhost/broadway/advanced_php</a>";
mail("sandesh.bhattarai79@gmail.com", $subject, $message, $headers);
?>
