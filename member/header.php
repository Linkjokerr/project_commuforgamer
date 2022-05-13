<?php 
session_start();
include("../database.php");

	if(empty($_SESSION["UserID2"])){
		echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		echo("<script>window.location = '../index.php';</script>");
	} 
	  
?>
<?php
				function DateThai($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strDay";
				}
				function DateThai2($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strMonthThai $strYear";
				}   
				function DateThai3($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strMonthThai ";
				}  
				function DateThai4($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return " $strYear";
				}  
	?>
	<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> ARE YOU READY </title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>

<body  style="background-color: #000; ">
  
  <!--***************************** Header Starts Here *****************************-->

  <header id="nav-head"   style="background-color: #000; border-bottom: solid #000">
  	<div class="container" >
  		<div class="row">
  			<div class="col-lg-3 " align="center" >
  				<a href="index.php" >
  				<div style="margin-top: 5px;"> 
  				<font color="white" size="5px"> <b>   ARE YOU READY </b> </font>
  				</div> 
  				</a>
  				<a data-toggle="collapse" data-target="#search" href="https://www.smarteyeapps.com/demo/smart-forum/index.html#search" class="collapsed" aria-expanded="false">
  					<font color="red" size="4px"> <i class="fa  d-md-none fa-search"></i>  </font>
				</a>
 				<a data-toggle="collapse" data-target="#login" href="https://www.smarteyeapps.com/demo/smart-forum/index.html#login" class="" aria-expanded="true">
  				<font color="red" size="4px">  <i class="fa  d-md-none fa-user"></i>   </font>
				</a>  
  			</div>
  			<div id="search" class="col-lg-5  ">
 					
  					<form action="index.php" method="get">  
					 <div class="input-group  ">
						<input class="form-control py-2 border-right-0 border" type="search" placeholder=" ค้นหาแท็กเกมส์ " id="example-search-input" name="search" autofocus value=" ">
						<span class="input-group-append">
						  <button class="btn btn-outline-secondary border-left-0 border" type="submit">
								<i class="fa fa-search"></i>
						  </button>
						</span>
					</div>
           			</form>
					  
  			</div>
  			<div id="login" class="col-lg-4 col-md-5 d-none d-md-block center login-btns"> 
  				<a href="post.php">
  				<button type="button" class="btn btn-sm btn-success"><i class="fa fa-address-card"></i> โพสต์ </button>
				</a>
  				<a href="../check_out.php">
  				<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-outdent"></i> ออกจากระบบ </button>
				</a>
  			</div>
  		</div>
  	</div>
  </header>