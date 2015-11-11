		<html>
		<head>
		<link href="/edited/bs/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
<link href="/edited/default.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="shortcut icon" href="/edited/icon.png" type="image/x-icon.ico">
	
	
			<script src="/edited/upper/bootstrap-modal.js"></script>
	        <script src="/edited/upper/bootstrap-jquery.js"></script>
		    <script src="/edited/jquery.min.js"></script>
			<script src="/edited/bs/js/bootstrap.min.js"></script>
		
<script>
		$(document).ready(function() {
		$('.dropdown-toggle').dropdown()
		$('#signupc').click(function() {
			window.location.href = '/edited/signup.php';
			return false;
		});
						});


</script>
		</head>
		<!--whole nav div wrap starts from here TO BE COPIED ON EVERY PAGE START COPYING START-->
		<body>
		 <div>
		 <!-- header-->
		  <div id="header">
			  <div id="head1"><font color="white">
			   CollegeConnect</font></div>
			  
		 </div>
		  <!-- nav wrap-->
		  <div id="nav" >
			  <div id="menu" >

			 <ul style="margin-left:5%;">
				 <a href="/edited/index.php" <li div="uni">	<span class="glyphicon glyphicon-home white" style="font-size: 20px;padding-bottom: 6px;
				 display: inline-table;
					 vertical-align: bottom;"></span></li>	</a>
					<li ><a href="#">Engineering</a>
					  <ul class="sub-menu">
						<li><a href="/edited/pages/engg_p/engg_p.php"> Private</a></li>
						<li><a href="/edited/pages/engg_g/engg_g.php">Goverment</a></li></ul></li>
					<li ><a href="#">Medical</a>
						<ul class="sub-menu">
							<li><a href="/edited/pages/med_p/med_p.php"> Private</a></li>
							<li><a href="/edited/pages/med_g/med_g.php">Goverment</a></li></ul></li>
					<li ><a href="/edited/pages/mang/mang.php">Management</a>
						</li>
					
					<li ><a href="/edited/pages/law/law.php">Law</a>
						</li>
					</ul>

			  </div>	
		 <div id="navr" style="background-color:#2f64b3;">
			 <div id="login" ><?php 
				
				if(isset($_SESSION['femail']) && $_SESSION['femail']!="")
{
      echo '';
     
}
else{
echo '<button class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">LogIn</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      
      <div class="modal-body">
          <form class="form col-md-12 center-block" action="/edited/logina.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Email" name="email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password" name="pass">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Sign In</button>
              <span class="pull-right"><a href="/edited/signup.php">Register</a></span><span class="pull-left"><a href="#">Need help?</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>
  </div>
</div>
        
   





        
        <!-- JavaScript jQuery code from Bootply.com editor -->
        
        <script >
        
        $(document).ready(function() {
        
            
        
        });
        
        </script></div>';
}?>
				</div>
			 <div id="signup" ><?php 
           if(isset($_SESSION['femail']) && $_SESSION['femail']!="")
              {
							  echo '<div class="btn-group">
				  <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">Hello
					'.$_SESSION['pname'].' <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="/edited/profile/index.php">Profile</a></li>
					
					<li class="divider"></li>
					<li><a href="/edited/logout.php">LogOut</a></li>
				  </ul>
				</div>';}
             else
              {echo '<button type="button" class="btn btn-sm btn-primary" id="signupc" >SignUp</button>';}			 ?></div>
		 </div>
		 </div>
		 </div>
		 <!--whole nav div wrap ends here STOP COPYING BAS KAR BE END-->
		 <!--upper part end-->
		 <?php 
		 define('T_USER','user',true);
		 define('T_COMMENT','comment',true);
		 ?> 
		 </body>
		 </html>