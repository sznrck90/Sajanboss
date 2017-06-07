<?php include 'include/header.php';?>
    <div id="wrapper">
<?php include 'include/navigation.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">
<?php include 'include/notification.php'; ?>
    
	<div id="content">
        <h4>List Category</h4>
        <table class="table table-bordered table-stripped">
	<thead>
		<th>S.N</th>
		<th>Category Title</th>
		<th>Added By</th>
		<th>Status</th>
		<th>Summry (Substring)</th>
	</thead>
	<tbody>
		<?php
			$category = getAllCategory();
			if($category){
				$i =1;
				foreach($category as $cat_data){
				?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $cat_data['category_title'];?></td>
					<td><?php echo $cat_data['category_title'];?></td>
					<td><?php echo ($cat_data['status'] == 1) ? 'Active' : 'Inactive';?></td>
					<td><?php echo substr($cat_data['summary'],0,100)."...";?></td>

				</tr>
				<?php
				$i++;
				}
			} else {
				echo "<tr><td colspan='5'>Sorry! There are no any data in the database.</td></tr>";
			}
		?>
	</tbody>
</table>
	</div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include 'include/footer.php'; ?>
