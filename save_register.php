<?php
include('database.php');
	
	$strSQL = "SELECT * FROM member_all WHERE username = '".($_POST['username'])."' ";
	$objQuery = mysqli_query($objCon, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
			 echo("<script>alert('Username ซ้ำกับในระบบ!!')</script>");
			 echo("<script>window.location = 'register.php';</script>");
	}
	else
	{	 
		 
 
				$check_image11 = $_FILES["newAvatar"]["name"]; 
				$update_img11 = "";
  
				
					if(empty($check_image11)){
						$check_image11 = "";
					}else{
						$check_image11 = "i1".rand(1,9999).$_FILES["newAvatar"]["name"];
						 
						
						$images = $_FILES["newAvatar"]["tmp_name"];
						$new_images = "K".$_FILES["newAvatar"]["name"]; 
						$width=400; //*** Fix Width & Heigh (Autu caculate) ***//
						$size=GetimageSize($images);
						$height=400;
						$images_orig = ImageCreateFromJPEG($images);
						$photoX = ImagesX($images_orig);
						$photoY = ImagesY($images_orig);
						$images_fin = ImageCreateTrueColor($width, $height);
						ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
						ImageJPEG($images_fin,"images/".$check_image11);
						ImageDestroy($images_orig);
						ImageDestroy($images_fin);
						
						
					   $update_img11  =  $check_image11 ;
					}
		  
 				$strSQL = "INSERT INTO member_all (
				username, password, status, img 
				) VALUES 
				( '".$_POST["username"]."','".$_POST["password"]."','M', '".$update_img11."'  )"; 
				$objQuery = mysqli_query($objCon, $strSQL);		

				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
			 //echo $strSQL;
		 
				echo("<script>window.location = 'index.php'; </script>"); 
		
	}
?>
 
