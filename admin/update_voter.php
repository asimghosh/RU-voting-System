<?php
include('dbcon.php'); 
$id=$_POST['id'];


mysql_query("update voters set VoterID='$id'");
?>