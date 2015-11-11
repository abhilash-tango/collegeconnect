<?php 
require('connect.php');
$delete=$_GET['ud'];
mysql_query("DELETE FROM comment WHERE uid='".$delete."'");
header("location:engg_p.php");
?>