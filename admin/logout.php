<?php

	include('session.php');

	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"evote");

	$login_query=mysqli_query($link,"select * from users where User_id=$id_session");
	$count=mysqli_num_rows($login_query);
	$row=mysqli_fetch_array($login_query);

	$f=$row['FirstName'];
	$l=$row['LastName'];
	$type=$row['User_Type'];

	//session_start();


	mysqli_query($link,"INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Logout', NOW(),'$type')")or die(mysqli_error());




	session_destroy();

	//header('location:index.php');
	?>
	<script type="text/javascript">
		window.location="index.php";
	//window.location="demo.php";
	</script>
	<?php


?>