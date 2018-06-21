<link rel="stylesheet" type="text/css" href="css/style.css" />


<?php 
	session_start();

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
		<img src="images/logo.png" width="60" height="60">
 	</a>
	<a class="brand">
	 <h2>E-Voting System for RU Teacher’s Association Election</h2>
	 <div class="chmsc_nav"><font size="4" color="white">University of Rajshahi</font></div>
 	</a>

	<?php 

		include('head.php'); 

	?>
 
	</div>
	</div>
	</div>
<div class="wrapper_admin">
</br>
</br>
</br>
	<div id="element" class="hero-body-index">

	<p><font color="white"><h2>Admin Login</h2></font></p>
	
	<form method="POST" >
	<table>
    <tr><td><font color="white">User Name:</font>&nbsp;&nbsp;</td><td><input type="text"  name="UserName" class="UserName_hover"></td></tr>
	<tr><td>...<td></tr>
    <tr><td><font color="white">Password:</font>&nbsp;&nbsp;</td><td><input type="Password" name="Password" class="Password_hover"></td></tr>
	<tr><td>...<td></tr>
	<tr><td></td><td>
	<button class="btn btn-primary" name="Login"><i class="icon-ok icon-large"></i>&nbsp;Login</button>
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

$login_query=mysqli_query($link,"select * from users where UserName='$UserName' and Password='$Password'");

$count=mysqli_num_rows($login_query);
$row=mysqli_fetch_array($login_query);
$f=$row['FirstName'];
$l=$row['LastName'];

if ($count > 0){

	$_SESSION['id']=$row['User_id'];
	$_SESSION['User_Type']=$row['User_Type'];
	$type=$row['User_Type'];

	mysqli_query($link,"INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Login', NOW(),'$type')")or die(mysqli_error());


	//header('location:home.php');


	?>
	<script type="text/javascript">
		window.location="home.php";
	//window.location="demo.php";
	</script>
	<?php	


}else{
?>
    <div class="alert alert-error">
    <button class="close" data-dismiss="alert">×</button>
   Please check your UserName and Password
    </div>

<?php 
	} 

	}

?>	
</div>
</div>
</br>
</br>
</br>
</br>
</br>

	<?php include('footer3.php')?>	
</div>

    </body>
	
</html>
																				
											
	