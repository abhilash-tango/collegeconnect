
<html lang="en">
<head>
<title>Engineering|Private</title>
</head>
<body>
         <?php
         session_start();		 
		 require ('../../upper.php');
		 ?>
		 <!-- mid part starts here-->
		 
		 <div id="signheader"><p style="font-size:25px;font-family:arial;color:white;margin-left:10%;letter-spacing:5px;padding-top:20px;">Engineering|Private</p></div>
         	 <!-- body starts --->        
		<div id="body">
        <div  id="engg_gtable" style="margin-top:25px;width:100%;padding-top:20px;">
<table class="table table-striped">
<thead>
<tr>
<th>College</th>
<th>website</th>
</tr>
</thead>
<tbody>
<tr>
<td><a href="#bits">Birla Institute Of Technology and Science(BITS) Pilani</a></td>
<td>www.bits-pilani.ac.in</td>
</tr>
<tr>
<td><a href ="#psgc">PSG College of Technology Coimbtore</a></td>
<td>www.psgtech.edu</td>
</tr>
<tr>
<td><a href ="#bitm">Birla Institute Of Technology(BIT) Mesra</a></td>
<td>www.bitmesra.ac.in</td>
</tr>
<tr>
<td><a href="#daiict">Dhirubhai Ambani Institute Of Engineering and Technology(DAIICT) Gandhinagar</a></td>
<td>www.daiict.ac.in</td>
</tr>
<tr>
<td><a href="#thap">Thapar Institute Of Engineering and Technology Patiala</a></td>
<td>www.thapar.edu</td>
</tr>
<tr>
<td><a href="#rvb">R V College Of Engineering Banglore</a></td>
<td>www.rvce.edu.in</td>
</tr>
<tr>
<td><A href="#vit">Vellore Institute Of Technology Vellore</a></td>
<td>www.vit-ac.in</td>
</tr>




</tbody>
</table>
</div>
<!-- college content starts IIT KANPUR here START -->
<?php require('../../profile/stream.php');
require('../decide.php'); ?>

<div class="panel panel-primary" id="bits">
<div class="panel-heading">Birla Institute Of Technology and Science(BITS) Pilani</div>
  <div class="panel-body">
   <div class="panel panel-primary pull-left col-md-6">
  <div class="panel-body">
    <img src="../../assets/college/engg_p/bits_pilani.jpg" alt="Responsive image" class="img-responsive"/>
  </div>
  <div class="panel-footer">
  <div class="panel panel-default">
  <div class="panel-body">
   
<?php

$c=0;
require('connect.php');
$sqll="SELECT * FROM  comment ORDER BY uid DESC ";
		$tname=mysql_query($sqll);
		while(($row = mysql_fetch_array($tname)) && ($c!=4))
		{
		$id=$row['uid'];
		 $name=$row['name'];
		$kcom=$row['cobits'];
		$kclg=$row['college'];
		$email=$row['email'];
		$samay=$row['date'];
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
		
			$img=image($kclg);
		echo ('<div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="../../assets/simg/'.$img.'.jpg" alt="...">
  </a>
  <div class="media-body">
    <h6 class="media-heading"><b>'.$name.'  </b><small>'.$kclg.' <font face="Latha" size="1px">[posted on '.$samay.']</font></small></h6>
    '.$kcom.'<br/><small>'.$delink.'</small>
  </div>
</div>');
		
		}$c=$c+1;
		}$se='cobits'; echo('<a href=../reqc.php?ud='.$se.'><font color="#3B5998"><small>View all</small></font></a>');
		
?>
  </div>
  <div class="panel-footer">
       <form class="form-horizontal" role="form" method="post"action="cobitm.php?clg=<?php echo comment('Birla Institute Of Technology and Science(BITS) Pilani');?> &str=<?php echo stream('Birla Institute Of Technology and Science(BITS) Pilani');?>">
              <h4>Comment to ask or know about college <small>  @ feel free </small></h4>
               <div class="form-group" style="padding:14px;">
                <textarea class="form-control" placeholder="@ feel free" name="coiitk"></textarea>
              </div>
              
               <button class="btn btn-success pull-right" type="submit" name="subciitk" value="comment">Post</button><ul class="list-inline"><li><a href="#"><i class="glyphicon glyphicon-align-left"></i></a></li><li><a href="#"><i class="glyphicon glyphicon-align-center"></i></a></li><li><a href="#"><i class="glyphicon glyphicon-align-right"></i></a></li></ul>
            </form>
  </div>
</div></div>
</div>
<div class="panel panel-primary pull-right col-md-6">
<div class="panel-heading">News<span class="pull-right"><?php $se='nbits'; echo('<a href=../req.php?ud='.$se.'><font color="white" size="1px">View all</font></a>');?></span></div>
  <div class="panel-body">
    <?php

$c=0;
require('connect.php');
$sqll="SELECT * FROM  comment ORDER BY uid DESC ";
		$tname=mysql_query($sqll);
		while(($row = mysql_fetch_array($tname)) && ($c!=4))
		{
		$id=$row['uid'];
		 $name=$row['name'];
		$kcom=$row['nbits'];
		$kclg=$row['college'];
		$email=$row['email'];
		$samay=$row['date'];
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
		
			$img=image($kclg);
		echo ('<div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="../../assets/simg/'.$img.'.jpg" alt="...">
  </a>
  <div class="media-body">
    <h6 class="media-heading"><b>'.$name.'  </b><small>'.$kclg.' <font face="Latha" size="1px">[posted on '.$samay.']</font></small></h6>
    '.$kcom.'<br/><small>'.$delink.'</small>
  </div>
</div>');
		
		}$c=$c+1;
		}
		
?>
  </div>
  <div class="panel-footer">
    <form class="form-horizontal" role="form" method="post" action="nbitm.php?clg=<?php echo news('Indian Institute Of Information Technology(IIIT) Hyderabad');?> &str=<?php echo stream('Indian Institute Of Information Technology(IIIT) Hyderabad');?>">
              <h4>Post news about your college <small>  @ be rewsponsible and help others</small></h4>
               <div class="form-group" style="padding:14px;">
                <textarea class="form-control" placeholder="@ feel free" name="niitk"></textarea>
              </div>
              
               <button class="btn btn-success pull-right" type="submit" name="subniitk" value="Post">Post</button><ul class="list-inline"><li><a href="#"><i class="glyphicon glyphicon-align-left"></i></a></li><li><a href="#"><i class="glyphicon glyphicon-align-center"></i></a></li><li><a href="#"><i class="glyphicon glyphicon-align-right"></i></a></li></ul>
            </form>
  </div>
</div>
  </div>
 
</div>
<?php require ('colleges/psgc.php'); ?>
<?php require ('colleges/bitm.php'); ?>
<?php require ('colleges/daiict.php'); ?>
<?php require ('colleges/thap.php'); ?>
<?php require ('colleges/rvb.php'); ?>
<?php require ('colleges/vit.php'); ?>



<!--IIT KANPUR ENDS HERE -->
<!--IIT's STARTS  HERE -->

</div>
<?php require ('../../foot.php');?>
<!-- body content ends -->
</html>