<link rel="stylesheet" type="text/css" href="admin/css/style.css" />

<?php 

	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"evote");
	
	//include('session.php');
	include('header.php');

	 
	
 ?>

</head>
<body>

	<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
	<div class="container">
	     
		<a class="brand">
		<img src="admin/images/logo.png" width="60" height="60">
 	</a>
	<a class="brand">
	 <h2>E-Voting System for RU Teacher's Association Election</h2>
	 <div class="chmsc_nav"><font size="4" color="white">University of Rajshahi</font></div>
 	</a>

	<?php include('head.php'); ?>
 
	</div>
	</div>
	</div>
<div class="wrapper_admin">
</br>
</br>
</br>
	<div id="element" class="hero-body-index">

	<p><font color="white"><h2>Voter Login</h2></font></p>
	
	<form method="POST" >
	<table>
    <tr><td><font color="white">UserName:</font>&nbsp;&nbsp;</td><td><input type="text"  name="UserName" class="UserName_hover"></td></tr>
	<tr><td>...<td></tr>
    <tr><td><font color="white">Password:</font>&nbsp;&nbsp;</td><td><input type="Password" name="Password" class="Password_hover"></td></tr>
	<tr><td>...<td></tr>
	<tr><td></td><td>	<button class="btn btn-primary" name="Login"><i class="icon-ok icon-large"></i>&nbsp;Login</button>
	
	</td></tr>
	<tr><td>
	</td><tr>
	</form>
	</table>
	
	</br>
	<div class="error">

<?php

		if (isset($_POST['Login'])){

		$UserName=$_POST['UserName'];
		$Password=$_POST['Password'];

		$login_query=mysqli_query($link,"select * from voters where Username='$UserName' and Password='$Password' and Status='Unvoted' and Dept='CSE'") or die(mysqli_error());

		$login_query3=mysqli_query($link,"select * from voters where Username='$UserName' and Password='$Password' and Status='Unvoted' and Dept='EEE'") or die(mysqli_error());

		$login_query4=mysqli_query($link,"select * from voters where Username='$UserName' and Password='$Password' and Status='Unvoted' and Dept='ICE'") or die(mysqli_error());

		$login_query5=mysqli_query($link,"select * from voters where Username='$UserName' and Password='$Password' and Status='Unvoted' and Dept='APEE'") or die(mysqli_error());
		//
		$login_query1=mysqli_query($link,"select * from voters where Username='$UserName' and Password='$Password' and Status='Voted'");

		$login_query2=mysqli_query($link,"select * from voters where Username='$UserName' and Password='$Password' and Status='Voted'");

		$count=mysqli_num_rows($login_query);
		$count1=mysqli_num_rows($login_query1);
		$count3=mysqli_num_rows($login_query3);
		$count4=mysqli_num_rows($login_query4);
		$count5=mysqli_num_rows($login_query5);
		$row=mysqli_fetch_array($login_query);
		$row3=mysqli_fetch_array($login_query3);
		$row4=mysqli_fetch_array($login_query4);
		$row5=mysqli_fetch_array($login_query5);

		$id=$row['VoterID'];
?>


<?php 
		if($count == 1){
			//session_start();
			$_SESSION['id']=$row['VoterID'];
				//header('location:voting.php');
				?>
				<script type="text/javascript">
					window.location="voting.php";
			 	</script>
				<?php
		}

		if($count3 == 1){



			//session_start();
			$_SESSION['id']=$row3['VoterID'];
				//header('location:voting2.php');
				?>
				<script type="text/javascript">
					window.location="voting2.php";
			 	</script>
				<?php
		}

		if($count4 == 1){
			//session_start();
			$_SESSION['id']=$row4['VoterID'];
			//header('location:voting3.php');
				?>
				<script type="text/javascript">
					window.location="voting3.php";
			 	</script>
				<?php
		}

		if($count5 == 1){
			//session_start();
			$_SESSION['id']=$row5['VoterID'];
				//header('location:voting4.php');
				?>
				<script type="text/javascript">
					window.location="voting4.php";
			 	</script>
				<?php
		}

		if($count1 == 1){ ?>
			<div class="alert alert-error">
		    <button class="close" data-dismiss="alert">�</button>
		   You Can Only Vote Once
		    </div>
		<?php
		}else{ 
			?>
				<div class="alert alert-error">
		    	<button class="close" data-dismiss="alert">�</button>
		   				Please check your username and password
		    	</div>

			<?php 
			
			}
		?>

		<?php
		}

?>



</div>
</div>
</br>
</br>
</br>
</br>
</br>

	<?php 

		include('footer.php');

	?>	


</div>

    </body>
	
</html>
																				
											
	