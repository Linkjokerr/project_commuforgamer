<?php
include('header.php');

$searchname = "";
?>
   
  
  <!--***************************** Body Starts Here *****************************-->
  <div class="body-content"  style="background-color: #000; ">>
  	  <div class="container">
  	  	<div class="row">
			<!-- ##########-- Forum Post Starts Here ##########-->
  	  		<div class="col-lg-8 col-md-12">
  	  		
  	  			<div class="col-lg-12">
  	  				<font color="white" size="5px"> โพสต์ล่าสุด </font>
  	  			</div>
  	  			 
                       <?php 
							$i = 1;
							$img = "";
							$img_all = "";
							$sql = "SELECT * FROM postdata where  title like '%".$searchname."%' order by pk desc ";   
							$query = mysqli_query($con,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{      
								
								$membername = " - "; 
								$membimg = "  "; 
								$sql4 = "SELECT * FROM member_all  where pk = '".$objResult["member"]."' "; 
								$query4 = mysqli_query($objCon,$sql4);
								while($objResult4 = mysqli_fetch_array($query4))
								{   
									$membimg = $objResult4["img"]; 
								}
								 
						?>
						
					<div class="singl-post-row d-flex justify-content-between" style="background-color: #202020; margin-top: 10px; ">

						<div class=" col-lg-2 " align="center" style="margin-top: 15px; margin-bottom: 10px;">
						 <img src="../images/<?php echo $membimg ;?>" alt="" width="100%" style="border-radius: 100px;" > 
						</div>
						<div class="  col-lg-10  " align="left"> 
							<font color="white" size="4px"> 
							<div style="margin-top: 8px;"> 
							<?php echo $objResult["title"] ;?>
							</div>
							<div style="margin-top: -5px;"> 
							<font color="#DCDCDC" size="2px"> <?php echo DateThai($objResult["create_date"])." ".DateThai3($objResult["create_date"]); ?>  </font>  
							</div>
							<div style="margin-top: 0px; margin-bottom: 10px;"> 
							<font color="white" size="3px"> 
							<?php echo $objResult["detail"] ;?></font> 
							</div>
							</font> 
						</div> 

					</div>
 	  			
  	  			  <?php } ?>
  	  		<br><br><br>
  	  		<br><br><br>
  	  		<br><br><br>
  	  		</div><!------- Forum Posts Here ------->
 	  		  
 	  		<!-- ##########-- Left Side Starts Here ##########--> 
  	  		  <div class="col-lg-4 col-md-12"  >
  	  			<div class="cat-box" style="background-color: #202020; ">
  	  				<h6> <font color="white">  แท็กยอดนิยม <i class="fa fa-lightbulb"></i>  </font> </h6>
					<ul>
						<li> <font color="white"> <i class="fa fa-tags"></i>  League of Legends <span class="badge badge-primary badge-pill">14</span>  </font> </li>
						<li> <font color="white"> <i class="fa fa-tags"></i>  ROV <span class="badge badge-primary badge-pill">13</span>  </font> </li> 
						<li> <font color="white">   DOTA <span class="badge badge-primary badge-pill">12</span>  </font> </li> 
						<li> <font color="white">   Garena <span class="badge badge-primary badge-pill">11</span>  </font> </li> 
						<li> <font color="white">   Game <span class="badge badge-primary badge-pill">10</span>  </font> </li> 
					</ul>
  	  			</div>	 
  	  		</div><!------- Left Side End Here ------->
  	  		
  	  		 
  	  		 
  	  	</div>
  	  </div>
  </div><!------- Body Content Ends Here ------->
  
  
 <!--***************************** Footer Starts Here *****************************--> 
  <footer>
  		<div class="container">
  			<div class="row"> 
  				<div class="col-lg-12" align="center" style="bottom: 10px;">
  					<p> copright 2022 @ ARE YOU READY </p>
  				</div> 
  			</div>
  		</div>
  </footer><!------- Footer Here ------->		
    
   
    <script src="css/jquery-3.2.1.min.js"></script>
    <script src="css/popper.js"></script>
    <script src="css/bootstrap.min.js"></script>
    <script src="css/jquery-scrolltofixed-min.js"></script>
    <script src="css/script.js"></script>


</body></html>