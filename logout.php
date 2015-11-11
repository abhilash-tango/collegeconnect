<?php 
session_start();
if (isset($_SESSION['femail'])) {
   unset($_SESSION['femail']);
   unset($_SESSION['pname']);
   session_destroy();
   
   Header("Location: index.php");
} 

 ?>