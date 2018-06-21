<?php

	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"evote");
 
 
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$UserName=$_POST['UserName'];
$Section=$_POST['Section'];
$Dept=$_POST['Dept'];
$Password=$_POST['Password'];
$VoterID=$_POST['VoterID'];

$pc_date = $_POST['pc_date'];
$pc_time = $_POST['pc_time'];
$user_name=$_POST['user_name'];

mysqli_query($link,"insert into voters (FirstName,LastName,UserName,Password,VoterID,Status,Dept,MiddleName)
values('$FirstName','$LastName','$UserName','$Password','$VoterID','Unvoted','$Dept','$Section')");

mysqli_query($link,"INSERT INTO history (data,action,date,user)VALUES('$FirstName $LastName', 'Added Voter', '$pc_date $pc_time','$user_name')")or die(mysqli_error());
?>
