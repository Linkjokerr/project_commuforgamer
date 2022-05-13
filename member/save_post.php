<?php
session_start();
include('../database.php');
	
	  
  
 				$strSQL = "INSERT INTO postdata (
				member, title, detail,  create_date, create_date2,
				create_time ) VALUES 
				(
				'".$_SESSION["UserID2"]."','".$_POST["title"]."','".$_POST["detail"]."', '".date('d-m-Y')."', '".date('Y-m-d')."',  
				'".date('H:i')."' 
				)"; 
				$objQuery = mysqli_query($objCon, $strSQL);		

				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
			 
		 
				echo("<script>window.location = 'index.php'; </script>"); 
?>
 
