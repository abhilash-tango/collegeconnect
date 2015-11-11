<html lang="en">
<head>
<title>Medical|Government</title>
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
		<td><a href="#aiimsd">All Indian Institute Of Medical Science(AIIMS) Delhi</a></td>
		<td>www.aiims.edu</td>
		</tr>
		<tr>
		<td><a href ="#afmcp">Armed Forces Medical College(AFMC) ,Pune</a></td>
		<td>www.afmc.nic.in</td>
		</tr>
		<tr>
		<td><a href ="#jipmer">Jawaharlal Institute of Postgraduate Medical Education and Research(JIPMER) ,Pondicherry</a></td>
		<td>www.jipmer.edu.in</td>
		</tr>
		<tr>
		<td><a href="#mamcd">Maulana Azad Medical College(MAMC) ,Delhi</a></td>
		<td>www.mamc.ac.in</td>
		</tr>
		<tr>
		<td><a href="#imsbhu">Institute Of Medical Science(IMS) BHU</a></td>
		<td>www.bhu.ac.in</td>
		</tr>



		</tbody>
		</table>
		</div>
		<?php require('../../profile/stream.php');
              require('../decide.php');		?>
<div class="panel panel-primary" id="aiimsd">
<div class="panel-heading">All Indian Institute Of Medical Science(AIIMS) Delhi</div>
  <div class="panel-body">
   <div class="panel panel-primary pull-left col-md-6">
  <div class="panel-body">
    <img src="../../assets/college/med_g/aiims_delhi.jpg" alt="Responsive image" class="img-responsive" />
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
		$kcom=$row['coaiimsd'];
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
		}$se='coaiimsd'; echo('<a href=../reqc.php?ud='.$se.'><font color="#3B5998"><small>View all</small></font></a>');
		
?>
  </div>
  <div class="panel-footer">
       <form class="form-horizontal" role="form" method="post" action="coaiimsd.php?clg=<?php echo comment('All Indian Institute Of Medical Science(AIIMS) Delhi');?> &str=<?php echo stream('All Indian Institute Of Medical Science(AIIMS) Delhi');?>">
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
<div class="panel-heading">News<span class="pull-right"><?php $se='naiimsd'; echo('<a href=../req.php?ud='.$se.'><font color="white" size="1px">View all</font></a>');?></span></div>
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
		$kcom=$row['naiimsd'];
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
    <form class="form-horizontal" role="form" method="post" action="naiimsd.php?clg=<?php echo news('All Indian Institute Of Medical Science(AIIMS) Delhi');?> &str=<?php echo stream('All Indian Institute Of Medical Science(AIIMS) Delhi');?>">
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
<?php require ('colleges/afmc.php'); ?>
<?php require ('colleges/jipmer.php'); ?>
<?php require ('colleges/mamcd.php'); ?>
<?php require ('colleges/imsbhu.php'); ?>
		</div>
		<?php require ('../../foot.php');?>
		</html>