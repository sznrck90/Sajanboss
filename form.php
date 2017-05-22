<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-05-21 16:20:39
 * @Organization: Knockout System Pvt. Ltd.
 */
if(isset($_POST['button_submit']) && $_POST['button_submit'] != ""){
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Page</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="form.php" name="" id="" enctype="multipart/form-data" class="form form-horizontal">
					<div class="form-group">
						<label>Name:</label>
						<input type="text" name="full_name" id="full_name" class="form-control " required placeholder="Full Name">
					</div>
					<div class="form-group">
							<lable>Password:</lable>
							<input type="password" class="form-control" name="password" id="password" >
					</div>
					<div class="form-group">
						<label>Select Country</label>
						<select name="country" id="country" class="form-control">
							<option value="Nepal">Nepal</option>
							<option value="India">India</option>
							<option value="China">China</option>
							<option value="USA">USA</option>
							<option value="UK">UK</option>
						</select>
					</div>
					<div class="form-group">
							<label>Description:</label>
							<textarea name="description" class="form-control" style='resize: none;' rows="5"></textarea>
					</div>
					<div class="form-group">
							<button class="btn btn-primary" name="submit" >Sumbit</button>
							<input type="submit" name="button_submit" class="btn btn-success" value="Submit" />
							<input type="reset" class="btn btn-danger" value="Reset" />
							<input type="submit" name="button_submit_1" class="btn btn-default" value="Submit" />
							<input type="reset" class="btn btn-warning" value="Reset" />

					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>