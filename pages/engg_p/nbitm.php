<html lang="en">
<head>

</head>
<body>
<?php
session_start();
require('../fnet.php');
if(isset($_SESSION['femail']) && $_SESSION['femail']!="")
{
require('../fnet.php');

$college=$_SESSION['fclg'];
$name=$_SESSION['pname'];
$date=date("d-m-Y",time());$comment=htmlspecialchars($_POST['coiitk']); 
$submit=$_POST['subciitk'];
$email=$_SESSION['femail'];$tip=$_SERVER["REMOTE_ADDR"];
$column=htmlspecialchars($_GET['clg']);
$streamo=htmlspecialchars($_GET['str']);
$tip= get_ip();
if($submit)
		 {
		 if( $comment)
		 {
		 $stmt = $db->prepare("INSERT INTO comment(stream , date, anew, ".$column.", name, college, email, ip)  VALUES(?, NOW(), ?, ?, ?, ?, ?, ?)");
	     if(!$stmt->execute(array($streamo, $comment, $comment, $name, $college, $email, $tip)))
	     {
	      echo
        "<script type=\"text/javascript\">".
        "window.alert('Something went wrong.Please try again');".
        'window.location.href="engg_g.php";'.
        "</script>";}
		 
		 else
		 {Header("Location:engg_g.php");}}
		 }
         }
         
else
{
     echo
        "<script type=\"text/javascript\">".
        "window.alert('Please Login to comment');".
        'window.location.href="engg_g.php";'.
        "</script>";}
?>
</body>
</html>
	