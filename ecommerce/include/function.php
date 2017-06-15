<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-06-07 16:39:52
 * @Organization: Knockout System Pvt. Ltd.
 */
	function debugger($data, $isDie=false){
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		if($isDie){
			exit;
		}
	}
?>
