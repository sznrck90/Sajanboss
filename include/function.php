<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-06-05 16:13:04
 * @Organization: Knockout System Pvt. Ltd.
 */


function debugger($variable, $isDie=false){
	echo "<pre>";
	print_r($variable);
	echo "</pre>";
	if($isDie){
		exit;
	}
}

function sanitizeString($string){
	global $conn;
	return mysqli_real_escape_string($conn, $string);
}

function addCategory($data, $isDie=false){
	global $conn;
	$sql = "INSERT INTO categories SET category_title = '".$data['category_title']."', summary = '".$data['summary']."', description = '".$data['description']."', status = ".$data['status'].", added_by = 1, added_date = now()";

	if($isDie){
		echo $sql;
		exit;
	} else {
		$query = mysqli_query($conn,$sql);
		if($query){
			return mysqli_insert_id($conn);
		} else {
			return false;
		}
	}
}

function getAllCategory($isDie=false){
	global $conn;
	$sql = "SELECT categories.*, users.full_name as name FROM categories LEFT JOIN users ON categories.added_by = users.id ORDER BY categories.id DESC ";
	if($isDie){
		echo $sql;
		exit;
	} else {
		$query = mysqli_query($conn, $sql);
		if($query){
			$data = array();
			while($row = mysqli_fetch_assoc($query)){
				$data[] = $row;
			}
			return $data;
		} else {
			return false;
		}
	}
}
?>
