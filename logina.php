<html>
	<head>
	</head>
	<body>
	<?php 
		
		$db = new PDO('mysql:host=localhost;dbname=connect;charset=utf8', 'root', '');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$femaillog=htmlspecialchars($_POST["email"]);
		$fpasslog=htmlspecialchars($_POST["pass"]);
		session_start(); 
		define('T_USER','users',true);
        
		$stmt = $db->prepare('SELECT firstn, lastn, college, password FROM '.T_USER.' WHERE email=? AND password=? ');
		$stmt->execute(array($femaillog, $fpasslog));
		
		if($stmt->rowCount()==1)
		{
		 $rows = $stmt->fetch(PDO::FETCH_ASSOC);
		 $_SESSION['fclg']=$rows['college'];
		 $_SESSION['femail']=$femaillog; 
		 $_SESSION['pname']=$rows['firstn'];
		 $_SESSION['lastname']=$rows['lastn'];
		 $_SESSION['pass']=$rows['password'];
		 Header("Location: profile/index.php");
		 exit() ; 
		
		}
		else
		{
		  Header("Location: login.php");
		exit();
		}

	 ?>
	 
	 </body>
	 </html>
