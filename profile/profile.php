<?php

require ('connect.php');

$email=$_SESSION['femail']; 
$sql="SELECT * FROM  users WHERE email='".$email."'  LIMIT 1";
$tname=mysql_query($sql);
$row = mysql_fetch_array($tname);
$fnam=$row['firstn'];
$lnam=$row['lastn'];
$coll=$row['college'];
$mail=$row['email'];
$line=stream($coll);




echo('
<div class="well well-lg">
<div class="panel panel-primary">

  <div class="panel-body">
    <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="../assets/img/y.jpg" alt="...">
  </a>
  <div class="media-body">
    <h4 class="media-heading">Profile</h4>
    <table class="table">
    <tbody>
	<tr>
<td>First Name :</td>
<td>'.$fnam.'</td>
</tr>
	<tr>
<td>Last Name :</td>
<td>'.$lnam.'</td>
</tr>
	<tr>
<td>College :</td>
<td>'.$coll.'</td>
</tr>
	<tr>
<td>Email :</td>
<td>'.$mail.'</td>
</tr>
	<tr>
<td>Stream :</td>
<td>'.$line.'</td>
</tr>
	</tbody>
  </table>
  </div>
</div>
  </div>
  <div class="panel-footer"><small>You have made it</small></div>
</div>
</div>');
?>