<?php
session_start(); 

		$name = "";  
		$address = ""; 
		$telphone = "";   
		$line = "";   
		$password = ""; 
		$repassword = ""; 
		$username = ""; 
		$code_member = ""; 
		$status = "";  
		$img = ""; 
		$address1 = ""; 
		$address2 = ""; 
		$address3 = ""; 
		$address4 = ""; 


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> ARE YOU READY </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
								function readURL1(input) { 
									if (input.files && input.files[0]) {
										var reader = new FileReader();

										reader.onload = function (e) {
											$('#blah1').attr('src', e.target.result);
										}

										reader.readAsDataURL(input.files[0]);
									}
								} 
								function readURL2(input) { 
									if (input.files && input.files[0]) {
										var reader = new FileReader();

										reader.onload = function (e) {
											$('#blah2').attr('src', e.target.result);
										}

										reader.readAsDataURL(input.files[0]);
									}
								} 
								function readURL3(input) { 
									if (input.files && input.files[0]) {
										var reader = new FileReader();

										reader.onload = function (e) {
											$('#blah3').attr('src', e.target.result);
										}

										reader.readAsDataURL(input.files[0]);
									}
								} 
								function readURL4(input) { 
									if (input.files && input.files[0]) {
										var reader = new FileReader();

										reader.onload = function (e) {
											$('#blah4').attr('src', e.target.result);
										}

										reader.readAsDataURL(input.files[0]);
									}
								} 
							</script>	
							
							
							
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg.png');">
			<div class="wrap-login100 " >
				<form class="login100-form validate-form" style="margin-top:  25px;"  action="save_register.php" method="post" enctype="multipart/form-data"  >
					  
					  
					 <div class="row"  style="background-color: #F6F5F5; border-radius: 50px;">
							<div class="col-lg-12" >
							 
							 <div class="row" style="margin-top: 15px;">  
							 <div class="col-lg-12"  >
 			 
								  <div class="row"> 
							      <div class="col-lg-1"> </div>  
								  <div class="col-lg-10" align="center" style="margin-left: 5px; margin-right: 5px; margin-top: 5px;" >    
									 <font size="4px" color="black" class="serif1"> ลงทะเบียน  </font>  <br> 
									  
									  <style>
							.image-upload > input
							{
								display: none;
							}
							.upload-icon{
							  width: 100%; 
							  border: 2px solid #C2C2C2; 
							}
							.upload-icon img{
							  width: 100%; 
							  cursor: pointer;
							}
							.upload-icon.has-img {
								width: 100%; 
								border: none;
							}
							.upload-icon.has-img img {
								width: 100%;
								height: auto;
								border-radius: 18px;
								margin:0px;
							}
							</style>
							  
								 	  <div class="col-lg-10" align="center" > <br>  
								    <?php
									if(empty($img1)){
										$show_img2 = "images/user.png";
									}else{ 
										$show_img2 = "images/".$img1;
									}
									?>  
									 <img src="<?php echo $show_img2; ?>"  width="100%" class="myAvatar" id="blah1" style="border-radius: 50px; height: 150px; width: 150px;" />
									<input type="file" name="newAvatar" id="newAvatar" style="display:none;" onchange="readURL1(this);"  />
									<script>
									$(".myAvatar").click(function() {
										$("#newAvatar").trigger("click");
									});
									</script>
								  </div>    
								  
									  <br>
									 <font size="2px" color="red" class="serif1">  * Username   </font>  
									<input type="text" name="username" id="username" class="form-control " value="<?php echo $username; ?>" autocomplete="off"  style=" border-radius: 5px; border: 1px solid #003566;"  required="" oninvalid="this.setCustomValidity(' กรุณาระบุ username ')"   oninput="setCustomValidity('')" placeholder=" Username "  > 
								 
									<br>
									 <font size="2px" color="red" class="serif1">  * Password </font>   
									<input type="password" name="password" id="password" class="form-control " value="<?php echo $password; ?>" autocomplete="off"  style=" border-radius: 5px; border: 1px solid #003566;"  required="" oninvalid="this.setCustomValidity(' กรุณาระบุ Password ')"   oninput="setCustomValidity('')" placeholder=" Password "  > 
									
								  </div>    
							  			  
								  </div>
								  	  			 	
							 </div>
							 
							 
							  
							  
							 <div class="col-lg-12" align="center" > <br>   
								   
									<button type="submit" class="btn btn-primary" style="background-color: #FFB000; border-radius: 5px; width: 150px; height: 40px; border-color: white; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#000000" size="2px" class="serif1" > <b>   ลงทะเบียน   </b> </font> </button> 
									
									<a href="index.php"> 
									<button type="button" class="btn btn-primary" style="background-color: #FFFFFF; border-radius: 5px; width: 150px;  height: 40px; border-color: white; border: 1px solid #A0816D;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" > <b>   ยกเลิก   </b> </font> </button>     </a>
									 <br><br><br>
									 
									 
									 
								  </div>  
							 </div>
							 
							 
							</div>
						</div>
						
						
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>