<?php

	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"evote");

	$id=$_POST['id'];
	
	$pc_date = $_POST['pc_date'];
	$pc_time = $_POST['pc_time'];
	$data_name = $_POST['data_name'];


	mysqli_query($link,"delete from candidate where CandidateID='$id'");


	mysqli_query($link,"INSERT INTO history (`data`,`action`,`date`,user)VALUES('$data_name', 'Deleted Candidate', '$pc_date $pc_time','Admin')");	


?>