	<html>
	<head>
	</head>
	<body>
	<?php 
	require ('profile/stream.php');
	$tfirstn=htmlspecialchars($_POST["fname"]);
	$tlastn=htmlspecialchars($_POST["lname"]);
	$tgender=htmlspecialchars($_POST["gender"]);
	$tpass=htmlspecialchars($_POST["password"]);
	$tcollege=htmlspecialchars($_POST["college"]);
	$temail=htmlspecialchars($_POST["email"]);
	$tip=get_ip();
	date_default_timezone_set("Asia/Calcutta");
	$date=date("d-m-Y",time());
	$db = new PDO('mysql:host=localhost;dbname=connect;charset=utf8', 'root', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	
	$stmt = $db->prepare("INSERT INTO users(firstn,lastn,college,email,gender,password,ip,date) VALUES(?, ?, ?, ?, ?, ?, ?, NOW())");
	if(!$stmt->execute(array($tfirstn, $tlastn, $tcollege, $temail, $tgender, $tpass, $tip)))
	{
	 require('upper.php');
	 ?><div class="alert alert-danger"><strong>Something went wrong!!!</strong> May be email already exists 
		 <a href="/edited/signup.php" class="alert-link"> Go back to previous page</a>
	</div>
	 <?php }
	 
	  else
	{
	 Header("Location:login.php");
	 }
	 ?>
	 
	 
	 </body>
	 </html>