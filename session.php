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
	$session_id=$_SESSION['id'];
?>