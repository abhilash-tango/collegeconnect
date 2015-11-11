<?php
session_start();

if(isset($_SESSION['femail']) && $_SESSION['femail']!="")
{
if (($_SESSION['fclg']) == "Indian Institute of Technology(IIT) Madras")
{
require('connect.php');
$college=$_SESSION['fclg'];
$name=$_SESSION['pname'];
$comment=$_POST['niitk']; 
$submit=$_POST['subniitk'];
$email=$_SESSION['femail'];
if($submit)
		 {
		 if( $comment)
		 {
	 mysql_query("INSERT INTO comment(niitm,name,college,email)
	 VALUES('$comment','$name','$college','$email') ") 
	 or die(mysql_error());
	 Header("Location:engg_g.php");
		 }
		 }
}
else
{echo 
		 "<script type=\"text/javascript\">".
        "window.alert('You do not belong to this college');".
        'window.location.href="engg_g.php";'.
        "</script>";}
		}
		else
		{echo
        "<script type=\"text/javascript\">".
        "window.alert('Please Login to comment');".
        'window.location.href="engg_g.php";'.
        "</script>";
		 
		}
		
?>