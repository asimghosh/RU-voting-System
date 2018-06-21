<?php

	session_start();
	if (!isset($_SESSION['id'])){

		//header('location:index.php');

		?>
			<script type="text/javascript">
				window.location="index.php";
	 
			</script>
		<?php
	}

	$id_session=$_SESSION['id'];
?>