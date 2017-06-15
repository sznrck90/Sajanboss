<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-06-06 17:13:19
 * @Organization: Knockout System Pvt. Ltd.
 */
?>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo JS_URL;?>bootstrap.min.js"></script>
	<?php
	if(isset($scripts) && $scripts != "" ){
		echo $scripts;
	}

	?>
</body>

</html>
