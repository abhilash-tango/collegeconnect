<!--Panel1 content STARTS-->
<html lang="en">
<head>
<link href="../bs/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<?php
$c=0;
require('connect.php');
$sqll="SELECT * FROM  comment ORDER BY uid DESC";
		$tname=mysql_query($sqll);
		while(($row = mysql_fetch_array($tname)) && ($c!=4))
		{
		$id=$row['uid'];
		 $name=$row['name'];
		$kcom=$row['anew'];
		$kclg=$row['college'];
		$email=$row['email'];
		if($kcom != null)
		{
		if(isset($_SESSION['femail']) && $_SESSION['femail']!="")
		{
		$kemail=$_SESSION['femail'];
		$ksetclg=$_SESSION['fclg'];}
		else {$kemail="";}
		if ($kemail == $email)
		{$delink="<a href=\"delete.php?ud=".$id."\">Delete</a>";}
		else {$delink="";}
		if ($kclg == $ksetclg)
		{$c=$c+1;
		echo ('<div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="../assets/img/y.jpg" alt="...">
  </a>
  <div class="media-body">
    <h5 class="media-heading"><b>'.$kclg.'</b></h5>
    '.$kcom.'
  </div>
</div>');
		}
		}
		}
		
?>

</html>
