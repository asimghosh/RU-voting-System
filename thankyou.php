'<link rel="stylesheet" type="text/css" href="admin/css/style.css" />

<?php 

	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"evote");

	session_start();
	//include('session.php');
	include('header.php');	

 ?>


 <script type="text/javascript">
	$(document).ready(function()
		{
		 var delay = 2000;
		setTimeout(function(){ window.location = 'index.php';}, delay);  
    });
	
</script>


 
<script src="jquery.iphone-switch.js" type="text/javascript"></script>
</head>
<body>

	<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
	<div class="container">
	     
		<a class="brand">
		<img src="admin/images/chmsc.png" width="60" height="60">
 	</a>
	<a class="brand">
	 <h2>CHMSC Laboratory School Voting System</h2>
	 <div class="chmsc_nav"><font size="4" color="white">Carlos Hilado Memorial State College</font></div>
 	</a>

	<?php

		 include('head.php'); 
	?>
 
	</div>
	</div>
	</div>
<div class="wrapper">

<?php 
	$result=mysqli_query($link,"select * from voters where VoterID='$session_id'") or die(mysqli_error());
	$row=mysqli_fetch_array($result);
?>

<div class="thank_you">
<div class="thank">
<h2><font size="6" color="white">Thank You For Voting:&nbsp;&nbsp;<?php echo $row['FirstName']." ".$row['LastName'];?></font></h2>
</div>


<?php 

	session_destroy(); ///vul astese................

?>

</div>
</div>




	
</div>

    </body>
	
</html>
												
											
	