<?php
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"evote");

if (isset($_POST['save'])){

	$rfirstname=$_POST['rfirstname'];
	$rlastname=$_POST['rlastname'];
	$rgender=$_POST['rgender'];
	$rdept=$_POST['rdept'];
	$rposition=$_POST['rposition'];
	$rmname=$_POST['rmname'];
	$party=$_POST['party'];
	$user_name=$_POST['user_name'];

	
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

			
	if ($rposition=="President"){
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			
			
	mysqli_query($link,"insert into candidate (FirstName,LastName,Dept,Position,Gender,MiddleName,Photo,Party,abc)
			values('$rfirstname','$rlastname','$rdept','$rposition','$rgender','$rmname','$location','$party','a')") or die(mysqli_error());		


	mysqli_query($link,"INSERT INTO history (data,action,date,user)VALUES('$rfirstname $rlastname', 'Added Candidate', NOW(),'$user_name')")or die(mysqli_error());

		//header('location:candidate_list.php');

		?>
			<script type="text/javascript">
				window.location="candidate_list.php";
	 
			</script>
		<?php


	}

//


	if ($rposition=="Vice-President"){
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			
			
	mysqli_query($link,"insert into candidate (FirstName,LastName,Dept,Position,Gender,MiddleName,Photo,Party,abc)
			values('$rfirstname','$rlastname','$rdept','$rposition','$rgender','$rmname','$location','$party','b')") or die(mysqli_error());		


	mysqli_query($link,"INSERT INTO history (data,action,date,user)VALUES('$rfirstname $rlastname', 'Added Candidate', NOW(),'$user_name')")or die(mysqli_error());

	//header('location:candidate_list.php');


		?>
			<script type="text/javascript">
				window.location="candidate_list.php";
	 
			</script>
		<?php
}



	if ($rposition=="General Secretary"){
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			
			
	mysqli_query($link,"insert into candidate (FirstName,LastName,Dept,Position,Gender,MiddleName,Photo,Party,abc)
			values('$rfirstname','$rlastname','$rdept','$rposition','$rgender','$rmname','$location','$party','c')") or die(mysqli_error());		


	mysqli_query($link,"INSERT INTO history (data,action,date,user)VALUES('$rfirstname $rlastname', 'Added Candidate', NOW(),'$user_name')")or die(mysqli_error());

	//header('location:candidate_list.php');

		?>
			<script type="text/javascript">
				window.location="candidate_list.php";
	 
			</script>
		<?php
}

//
	if ($rposition=="Joint Secretary"){
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			
			
	mysqli_query($link,"insert into candidate (FirstName,LastName,Dept,Position,Gender,MiddleName,Photo,Party,abc)
			values('$rfirstname','$rlastname','$rdept','$rposition','$rgender','$rmname','$location','$party','d')") or die(mysqli_error());		


	mysqli_query($link,"INSERT INTO history (data,action,date,user)VALUES('$rfirstname $rlastname', 'Added Candidate', NOW(),'$user_name')")or die(mysqli_error());

	//header('location:candidate_list.php');


		?>
			<script type="text/javascript">
				window.location="candidate_list.php";
	 
			</script>
		<?php
}


//


	if ($rposition=="Treasurer"){
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			
			
	mysqli_query($link,"insert into candidate (FirstName,LastName,Dept,Position,Gender,MiddleName,Photo,Party,abc)
			values('$rfirstname','$rlastname','$rdept','$rposition','$rgender','$rmname','$location','$party','e')") or die(mysqli_error());		


	mysqli_query($link,"INSERT INTO history (data,action,date,user)VALUES('$rfirstname $rlastname', 'Added Candidate', NOW(),'$user_name')")or die(mysqli_error());

	//header('location:candidate_list.php');


		?>
			<script type="text/javascript">
				window.location="candidate_list.php";
	 
			</script>
		<?php
}
//




	if ($rposition=="Members"){
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			
			
	mysqli_query($link,"insert into candidate (FirstName,LastName,Dept,Position,Gender,MiddleName,Photo,Party,abc)
			values('$rfirstname','$rlastname','$rdept','$rposition','$rgender','$rmname','$location','$party','f')") or die(mysqli_error());		


	mysqli_query($link,"INSERT INTO history (data,action,date,user)VALUES('$rfirstname $rlastname', 'Added Candidate', NOW(),'$user_name')")or die(mysqli_error());

	//header('location:candidate_list.php');


		?>
			<script type="text/javascript">
				window.location="candidate_list.php";
	 
			</script>
		<?php
}



}
?>