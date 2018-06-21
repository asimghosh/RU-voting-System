<?php

  include('OLEwriter.php');
  include('BIFFwriter.php');
  include('Worksheet.php');
  include('Workbook.php');

  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"evote");

  //require_once('OLEwriter.php');
  //require_once('BIFFwriter.php');
  //require_once('Worksheet.php');
  //require_once('Workbook.php');
 // require_once('connect.php');
  


    function HeaderingExcel($filename) {
      header("Content-type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=$filename" );
      header("Expires: 0");
      header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
      header("Pragma: public");
      }
	  
	  // HTTP headers
HeaderingExcel('Voter_List.xls');// Creating a workbook
$workbook = new excel("-");
// Creating the first worksheet
$worksheet1 =& $workbook->add_worksheet('candidate result');
$worksheet1->freeze_panes(1, 0);
  $worksheet1->set_column(0, 0, 25);
  $worksheet1->set_column(1, 1, 20);
  $worksheet1->set_column(1, 2, 20);
  $worksheet1->set_column(1, 3, 20);
  $worksheet1->set_column(1, 4, 20);
  $worksheet1->set_column(1, 5, 20);
  $worksheet1->set_column(1, 6, 20);
  $worksheet1->set_column(1, 7, 20);







   $worksheet1->write_string(1,0,"Carlos   Hildado   Memorial");
   $worksheet1->write_string(1,1,"State   College");
   $worksheet1->write_string(2,0,"Laboratory School");
   $worksheet1->write_string(4,0,"Canvassing Report");
   $worksheet1->write_string(5,0,"Results List");
   $worksheet1->write_string(7,0,"Position");
   $worksheet1->write_string(7,1,"Party");
   $worksheet1->write_string(7,2,"FirstName");
   $worksheet1->write_string(7,3,"LastName");
   $worksheet1->write_string(7,4,"MiddleName");
   $worksheet1->write_string(7,5,"Gender");
   $worksheet1->write_string(7,6,"Dept");
   $worksheet1->write_string(7,7,"No.of Votes");






/////////////////
	

	$qryreport = mysqli_query($link,"SELECT * FROM candidate order by abc") or die(mysqli_error());
	
	$sqlrows=mysqli_num_rows($qryreport);
	$j=8;
	
	WHILE ($reportdisp=mysqli_fetch_array($qryreport)) { $id=$reportdisp['CandidateID'];
	$j=$j+1;
			$Position = $reportdisp['Position'];
			$Party = $reportdisp['Party'];
			$FirstName = $reportdisp['FirstName'];
			$LastName = $reportdisp['LastName'];
			$MiddleName = $reportdisp['MiddleName'];
			$Gender = $reportdisp['Gender'];
			$Dept = $reportdisp['Dept'];
		
		 $votes_query=mysqli_query($link,"select * from votes where CandidateID='$id'");
	$vote_count=mysqli_num_rows($votes_query);


			
			
			
				
			
			
			 $worksheet1->write_string($j,0,"$Position");
			 $worksheet1->write_string($j,1,"$Party");
			 $worksheet1->write_string($j,2,"$FirstName");
			 $worksheet1->write_string($j,3,"$LastName");
			 $worksheet1->write_string($j,4,"$MiddleName");
			 $worksheet1->write_string($j,5,"$Gender");
			 $worksheet1->write_string($j,6,"$Dept");
			 $worksheet1->write_string($j,7,"$vote_count");
		
			
			 
	}
	
	
	
/////////////////
  
  

  
$workbook->close();
?>