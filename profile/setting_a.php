<html>
<head>
<link href="/edited/bs/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<?php
session_start();
require ('connect.php');
$aemail=$_SESSION['femail'];
$first_name=htmlspecialchars($_POST['fname']);
$last_name=htmlspecialchars($_POST['lname']);
$email=htmlspecialchars($_POST['email']);
$password=htmlspecialchars($_POST['password']);
$lol=55;
if ($first_name == '')
{$first_name=$_SESSION['pname'];}
if ($last_name == '')
{$last_name=$_SESSION['lastname'];}
if ($email == '' )
{$email=$_SESSION['femail'];}
if ($password == '' )
{$password=$_SESSION['pass'];}
$query="UPDATE users SET firstn='$first_name' ,lastn='$last_name' ,email='$email' ,password='$password'
WHERE email='$aemail'";


$retval = mysql_query( $query);
if(! $retval )
{?>
  <div class="alert alert-danger">Something went wrong
  <a href="/edited/profile/index.php" class="alert-link">Return to previous page</a>
</div>
<?php }
else
{
header("location:index.php");
} ?>
</html>