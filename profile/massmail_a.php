<html lang="en">
<head>

</head>
<body>
<?php
session_start();
if(isset($_SESSION['femail']) && $_SESSION['femail']!="")
{
require('connect.php');
$college=$_SESSION['fclg'];
$name=$_SESSION['pname'];
$date=date("d-m-Y",time());
$comment=$_POST['coiitk']; 
$submit=$_POST['subciitk'];
$email=$_SESSION['femail'];
if($submit)
		 {
		 if( $comment)
		 {
	 mysql_query("INSERT INTO comment(stream,date,massmail,name,college,email)
	 VALUES('Engineering','$date','$comment','$name','$college','$email') ") 
	 or die(mysql_error());
	 Header("Location:/edited/profile/index.php");
		 }
		 }
}
else
{echo
        "<script type=\"text/javascript\">".
        "window.alert('Please Login to comment');".
        'window.location.href="engg_g.php";'.
        "</script>"
		;}
?>
</body>
</html>
	