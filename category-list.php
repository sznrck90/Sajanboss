<?php 
	include 'dbconnect.php';
	include 'include/function.php';
?>
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