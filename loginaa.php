<html lang="en">
<head>
<title>CollegeConnect | LogIn</title>
<link href="bs/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
require ('upper.php');
?>
<!-- LOGin form code starts from here START -->
<div id="informcontent">
<div id="signheader"><p style="font-size:25px;font-family:arial;color:white;margin-left:10%;letter-spacing:5px;padding-top:20px;">Login</p></div>
<div id="inform" style="margin-left:10%;margin-right:10%;margin-top:5%;margin-bottom:5%;padding-top:48px;border-style:solid;border-radius:6px;border-color:#8b9dc3;background-color:#dfe3ee;">
<div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Welcome !!!</strong>  Login to continue
</div>
<form class="form-horizontal" style="margin-left:25%;" action="logina.php" method="post">
<div class="form-group">
<label for="Name" class="col-sm-2 control-label">Email :</label>
<div class="input-group input-group-sm">
    
  <span class="input-group-addon"style="background-color:white;"><span class="glyphicon glyphicon-user red" style="font-size: 13px;
				 display: inline-table;
					 vertical-align: bottom;"></span></span>
 
  <input type="text" class="form-control" placeholder="Email" style="width:230px;" name="email">
</div></div>
<div class="form-group ">
<label for="Name" class="col-sm-2 control-label">Password :</label>
<div class="input-group input-group-sm">
  <span class="input-group-addon" style="background-color:white;"><span class="glyphicon glyphicon-lock red" style="font-size: 13px;
				 display: inline-table;
					 vertical-align: bottom;"></span></span>
 
  <input type="password" class="form-control" placeholder="password" style="width:230px;" name="pass">
</div>
</div>
<div  style="margin-left:17%;">
<input type="checkbox" /> Remember me</font></div><br>

<div style="margin-left:40%;">
<button type="submit" class="btn btn-primary">LogIn</button>

</div>
</form>
</div>
</div>
</div>
<!--LOgin form ends here END -->
<?php 
require ('foot.php');
?>
</body>
</html>