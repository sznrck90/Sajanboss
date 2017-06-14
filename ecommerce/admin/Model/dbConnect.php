<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-06-13 15:59:53
 * @Organization: Knockout System Pvt. Ltd.
 */
	
	class DbConnect{
		public $conn;
		public function __construct(){
			$this->conn = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD) or die("Error in database connection");
			$db = $this->conn->select_db(DB_NAME) or die($this->conn->error);
		}

		public function sanitize($string){
			return $this->conn->real_escape_string($string);
		}
	}
?>
