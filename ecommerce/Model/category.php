<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-06-15 16:01:42
 * @Organization: Knockout System Pvt. Ltd.
 */
class Category extends DbConnect{
	public function addCategory($data){
		/*debugger($data,true);*/
		$stmt = $this->conn->prepare("INSERT INTO categories SET title=?, summary = ?, description = ?, status =?, added_by= ?, added_date=now() ") or die($this->conn->error);

		$stmt->bind_param('sssii', $data['category_title'], $data['summary'], $data['description'], $data['status'], $data['added_by'] ) or die($this->conn->error);
		$result = $stmt->execute();
		if($result){
			return $this->conn->insert_id;
		} else {
			return false;
		}
	}
}
?>
