<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-05-29 15:59:09
 * @Organization: Knockout System Pvt. Ltd.
 */

if(isset($_SESSION['success']) && $_SESSION['success'] != ""){
?>
<div class="alert alert-success">
	<?php echo $_SESSION['success']; ?>	
</div>
<?php } $_SESSION['success'] = "";
if(isset($_SESSION['error']) && $_SESSION['error'] != ""){
?>

<div class="alert alert-danger">
	<?php echo $_SESSION['error']; ?>
</div>
<?php } $_SESSION['error'] = "";
if(isset($_SESSION['warning']) && $_SESSION['warning'] != ""){
?>
<div class="alert alert-warning">
		<?php echo $_SESSION['warning']; ?>

</div>
<?php } $_SESSION['warning'] = "";
if(isset($_SESSION['info']) && $_SESSION['info'] != ""){
?>
<div class="alert alert-info">
	<?php echo $_SESSION['info']; ?>
</div>
<?php } $_SESSION['info'] = "";
?>