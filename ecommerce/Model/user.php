<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-06-13 16:06:25
 * @Organization: Knockout System Pvt. Ltd.
 */

class User extends DbConnect{
	public function login($username){
		$stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ? AND status = 1 ") or die($this->conn->error);
		$stmt->bind_param('s',$username) or die($this->conn->error);
		$stmt->execute();
		$result = $stmt->get_result();
		if($result){
			$data = $result->fetch_assoc();
			return $data;
		} else {
			return false;
		}
	}
}
