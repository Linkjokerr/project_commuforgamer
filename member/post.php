<?php
include('header.php');
?>
   
  
  <!--***************************** Body Starts Here *****************************-->
  <div class="body-content"  style="background-color: #000; ">>
  	  <div class="container">
  	  	<div class="row">
			<!-- ##########-- Forum Post Starts Here ##########-->
  	  		<div class="col-lg-12 col-md-12">
  	  		
  	  		 <div class="page-title no-margin row">
				<h2> <font color="white"> โพสต์กระทู้  </font> </h2> 
			  </div>
  	  			 
  	  			 
  	  		 <div class="col-lg-8 app-post-cont col-md-12">
  	  			
  	  		
		    <form role="form" name="frmMain" method="post" action="save_post.php" enctype="multipart/form-data" >  
	
  	  		  <div class="row no-margin form-row">
        		<div class="col-sm-3">
        			<label for=""> หัวข้อกระทู้ </label><span class="rit-coln">:</span>
        		</div>
        		<div class="col-sm-9">
        			<input type="text" name="title" placeholder=" หัวข้อกระทู้ " class="form-control form-control-sm">
        		</div>
        	</div>	
        	
        	  <div class="row no-margin form-row">
        		<div class="col-sm-3">
        			<label for=""> รายละเอียด </label><span class="rit-coln">:</span>
        		</div>
        		<div class="col-sm-9">
        			<textarea type="text" name="detail" placeholder=" รายละเอียด " rows="5" class="form-control form-control-sm"></textarea>
        		</div>
        	</div>	
        	
         
        	  <div class="row no-margin form-row">
        		<div class="col-sm-3">
        			
        		</div>
        		<div class="col-sm-9 right">
        			<button class="btn bs-btn btn-sm btn-info"> โพสต์กระทู้ </button>
        		</div>
        	</div>	
  	  			
  	  		</form> 
  	  			 
  	  		</div><!------- Add Post Ends Here ------->
  	  			 
  	  			
  	  		<br><br><br>
  	  		<br><br><br>
  	  		<br><br><br>
  	  		</div><!------- Forum Posts Here ------->
 	  		  
 	  	 
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