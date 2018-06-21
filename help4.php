'<link rel="stylesheet" type="text/css" href="admin/css/style.css" />
<?php include('dbcon.php');
include('header.php');
include('session.php');
 ?>
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

	<?php include('head.php'); ?>
 
	</div>
	</div>
	</div>
<div class="wrapper">
<div class="hero-body-voting">
<div class="vote_wise"><font color="white" size="6">&nbsp;&nbsp;&nbsp;&nbsp;"How to Vote"</font></div>

<div class="help">
<a class="btn btn-success" id="back"  href="voting4.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
</div>
<hr>


<div class="helping">
<img src="admin/img/help.jpg">
</div>
</br>


</div>

    </body>
	
</html>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to Vote Later?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout_back.php" class="btn btn-success">Yes</a>
		</div>
		</div>		
											
	