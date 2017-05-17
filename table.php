<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-05-17 15:37:51
 * @Organization: Knockout System Pvt. Ltd.
 */
$all_student_array = array(
						"student_1" => array(
							"name" => "John Doe",
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
							"name" => "John Doe1",
							"roll_no" => 34,
							"class" => "BBA I",
							"email" => "johndoe@gmail.com",
							"address" => "Kathmandu, Nepal"),
						"student_4" => array(
							"name" => "John Doe2",
							"roll_no" => 45,
							"class" => "BBA II",
							"email" => "johndoe@gmail.com",
							"address" => "Kathmandu, Nepal"),
					);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Table For Multi dimensional data</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
	<script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h4 align="center">Student Information</h4>
				<table class="table table-bordered table-stripped table-responsive">
					<thead>
						<th>S.N.</th>
						<th>Student Name</th>
						<th>Roll No.</th>
						<th>Class</th>
						<th>Email</th>
						<th>Address</th>
					</thead>
					<tbody>
						<?php 
								$i = 1;
							foreach($all_student_array as $key=>$value){
								echo "<tr>";
								echo "<td>".$i."</td>";
								echo "<td>".$value['name']."</td>";
								echo "<td>".$value['roll_no']."</td>";
								echo "<td>".$value['class']."</td>";
								echo "<td>".$value['email']."</td>";
								echo "<td>".$value['address']."</td>";
								echo "</tr>";
								$i++;
							}
						?>
					</tbody>
				</table>



				<table class="table table-bordered table-stripped table-responsive">
					<thead>
						<th>S.N.</th>
						<th>Student Name</th>
						<th>Roll No.</th>
						<th>Class</th>
						<th>Email</th>
						<th>Address</th>
					</thead>
					<tbody>
						<?php 
								$i = 1;
							foreach($all_student_array as $key=>$value){
							?>
								<tr>
									<td><?php echo $i;?></td>
									<td><?php echo $value['name'];?></td>
									<td><?php echo $value['roll_no'];?></td>
									<td><?php echo $value['class'];?></td>
									<td><?php echo $value['email'];?></td>
									<td><?php echo $value['address'];?></td>
								</tr>
							<?php
								$i++;
							}
						?>
					</tbody>
					<tfoot></tfoot>
				</table>
			</div>
		</div>
	</div>
</body>
</html>