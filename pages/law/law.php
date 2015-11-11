<html lang="en">
<head>
<title>Law</title>
</head>
<body>
         <?php
         session_start();		 
		 require ('../../upper.php');
		 ?>
		 <!-- mid part starts here-->
		 
		 <div id="signheader"><p style="font-size:25px;font-family:arial;color:white;margin-left:10%;letter-spacing:5px;padding-top:20px;">Law</p></div>
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
<td><a href="#nlsiu">National Law School of India University(NLSIU) Banglore</a></td>
<td>www.nls.ac.in</td>
</tr>
<tr>
<td><a href ="#nalsar">Nalsar University of Law , Hyderabad</a></td>
<td>www.nlsar.ac.in</td>
</tr>
<tr>
<td><a href ="#nujs">West Bengal National University of Juridical Sciences(NUJS) ,Kolkata</a></td>
<td>www.nujs.edu</td>
</tr>
<tr>
<td><a href="#nluj">National Law University ,Jodhpur</a></td>
<td>www.nlujodhpur.ac.in</td>
</tr>
<tr>
<td><a href="#nliu">National Law Institute University(NLIU) ,Bhopal</a></td>
<td>www.nliu.ac.in</td>
</tr>
<tr>
<td><a href="#fold">Faculty Of Law DU ,Delhi</a></td>
<td>www.dc.ac.in</td>
</tr>
<tr>
<td><A href="#ilsp">ILS Law College ,Pune</a></td>
<td>www.ilslaw.edu</td>
</tr>
<tr>
<td><a href="#sslc">Symbiosis Society Law College ,Pune</a></td>
<td>www.symlaw.ac.in</td>
</tr>
<tr>
<td><a href="#alsd">Amity Law School ,Delhi</a></td>
<td>www.amity.edu/als/</td>
</tr>
<tr>
<td><a href="#glcm">Government Law College ,Mumbai</a></td>
<td>www.glcmumbai.com</td>
</tr>


</tbody>
</table>
</div>
<?php require('../../profile/stream.php'); ?>
<?php require('../decide.php');?>
<div class="panel panel-primary" id="nlsiu">
<div class="panel-heading">National Law School of India University(NLSIU) Banglore</div>
  <div class="panel-body">
   <div class="panel panel-primary pull-left col-md-6">
  <div class="panel-body">
    <img src="../../assets/college/law/nlsiu_banglore.jpg" alt="Responsive image" class="img-responsive" />
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
		$kcom=$row['conlsiu'];
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
		}$se='conlsiu'; echo('<a href=../reqc.php?ud='.$se.'><font color="#3B5998"><small>View all</small></font></a>');
		
?>
  </div>
  <div class="panel-footer">
       <form class="form-horizontal" role="form" method="post" action="conalsar.php?clg=<?php echo comment('National Law School of India University(NLSIU) Banglore');?> &str=<?php echo stream('Faculty Of Law DU ,Delhi');?>">
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
<div class="panel-heading">News<span class="pull-right"><?php $se='nnlsiu'; echo('<a href=../req.php?ud='.$se.'><font color="white" size="1px">View all</font></a>');?></span></div>
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
		$kcom=$row['nnlsiu'];
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
    <form class="form-horizontal" role="form" method="post" action="nnalsar.php?clg=<?php echo news('National Law School of India University(NLSIU) Banglore');?> &str=<?php echo stream('Faculty Of Law DU ,Delhi');?>">
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
<?php require ('colleges/nlasar.php');?>
<?php require ('colleges/nujs.php');?>
<?php require ('colleges/nliu.php');?>
<?php require ('colleges/nluj.php');?>
<?php require ('colleges/fold.php');?>
<?php require ('colleges/ilsp.php');?>
<?php require ('colleges/sslc.php');?>


</div>
<?php require ('../../foot.php'); ?>
</html>