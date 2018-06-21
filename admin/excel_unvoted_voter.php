<?php
  require_once('OLEwriter.php');
  require_once('BIFFwriter.php');
  require_once('Worksheet.php');
  require_once('Workbook.php');
  require_once('connect.php');
  


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
$worksheet1 =& $workbook->add_worksheet('Voter');
$worksheet1->freeze_panes(1, 0);
  $worksheet1->set_column(0, 0, 25);
  $worksheet1->set_column(1, 1, 20);
  $worksheet1->set_column(1, 2, 20);
  $worksheet1->set_column(1, 3, 20);
  $worksheet1->set_column(1, 4, 20);
  $worksheet1->set_column(1, 5, 20);
  $worksheet1->set_column(1, 6, 20);







   $worksheet1->write_string(3,0,"Voter Report");
   $worksheet1->write_string(5,0,"UnVoted Voter List");
   $worksheet1->write_string(7,0,"FirstName");
   $worksheet1->write_string(7,1,"LastName");
   $worksheet1->write_string(7,2,"MiddleName");
   $worksheet1->write_string(7,3,"UserName");
   $worksheet1->write_string(7,4,"Password");
   $worksheet1->write_string(7,5,"Dept");
   $worksheet1->write_string(7,6,"Status");







/////////////////
	

	$qryreport = mysql_query("SELECT * FROM voters where Status='UnVoted'") or die(mysql_error());
	
	$sqlrows=mysql_num_rows($qryreport);
	$j=8;
	
	WHILE ($reportdisp=mysql_fetch_array($qryreport)) {
	$j=$j+1;
			$FirstName = $reportdisp['FirstName'];
			$LastName = $reportdisp['LastName'];
			$MiddleName = $reportdisp['MiddleName'];
			$UserName = $reportdisp['Username'];
			$Password = $reportdisp['Password'];
			$Dept = $reportdisp['Dept'];
			$Status = $reportdisp['Status'];
		
			
			
			
			
				
			
			
			 $worksheet1->write_string($j,0,"$FirstName");
			 $worksheet1->write_string($j,1,"$LastName");
			 $worksheet1->write_string($j,2,"$MiddleName");
			 $worksheet1->write_string($j,3,"$UserName");
			 $worksheet1->write_string($j,4,"$Password");
			 $worksheet1->write_string($j,5,"$Dept");
			 $worksheet1->write_string($j,6,"$Status");
			
			 
	}
	
	
	
/////////////////
  
  

  
$workbook->close();
?>