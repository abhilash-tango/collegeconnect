
<html lang="en">
<head>
<title>Engineering|Government</title>
</head>
<body>
         <?php
         session_start();		 
		 require ('../../upper.php');
		 require ('../decide.php');
		 ?>
		 <!-- mid part starts here-->
		 
		 <div id="signheader"><p style="font-size:25px;font-family:arial;color:white;margin-left:10%;letter-spacing:5px;padding-top:20px;">Engineering|Government</p></div>
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
<td><a href="#iitk">Indian Institute of Technology(IIT) Kanpur</a></td>
<td>www.iitk.ac.in</td>
</tr>
<tr>
<td><a href ="#iitkgp">Indian Institute of Technology(IIT) Kharagpur</a></td>
<td>www.iitkgp.ac.in</td>
</tr>
<tr>
<td><a href ="#iitb">Indian Institute of Technology(IIT) Bombay</a></td>
<td>www.iitb.ac.in</td>
</tr>
<tr>
<td><a href="#iitm">Indian Institute of Technology(IIT) Madras</a></td>
<td>www.iitm.ac.in</td>
</tr>
<tr>
<td><a href="#iitg">Indian Institute of Technology(IIT) Guwahati</a></td>
<td>www.iitg.ac.in</td>
</tr>
<tr>
<td><a href="#iitr">Indian Institute of Technology(IIT) Roorkee</a></td>
<td>www.iitr.ac.in</td>
</tr>
<tr>
<td><A href="#iitbhu">Indian Institute of Technology(IIT) BHU,Varanasi</a></td>
<td>www.iitbhu.ac.in</td>
</tr>
<tr>
<td><a href="#ism">Indian School Of Mines(ISM) Dhanbad</a></td>
<td>www.ismdhanbad.ac.in</td>
</tr>
<tr>
<td><a href="#nitt">National Institute Of Technology(NIT) Trichy</a></td>
<td>www.nitt.edu</td>
</tr>
<tr>
<td><a href="#nitw">National Institute Of Technology(NIT) Warangal</a></td>
<td>www.nitw.ac.in</td>
</tr>
<tr>
<td><a href="#iiith">Indian Institute Of Information Technology(IIIT) Hyderabad</a></td>
<td>www.iiit.ac.in</td>
</tr>

</tbody>
</table>
</div>
<!-- college content starts IIT KANPUR here START -->
<?php require('../../profile/stream.php'); ?>
<div class="panel panel-primary" id="iitk">
	<div class="panel-heading">Indian Institute of Technology(IIT) Kanpur</div>
	  <div class="panel-body" >
		   <div class="panel panel-primary pull-left col-md-6">
			  <div class="panel-body">
				<img src="../../assets/college/engg_g/iit_k.jpg" alt="Responsive image" class="img-responsive" />
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
								$kcom=$row['coiitk'];
								$kclg=$row['college'];
								$email=$row['email'];
								$samay=$row['date'];
								if($kcom != null)
								{
								     if(isset($_SESSION['femail']) && $_SESSION['femail']!="")
								{
								$kemail=$_SESSION['femail'];
								$ksetclg=$_SESSION['fclg'];}
								else 
								    {
								      $kemail="";
									  }
								if ($kemail == $email)
								{
								      $delink="<a href=\"delete.php?ud=".$id."\">Delete</a>";
									  }
								else {
								     $delink="";
									 }
								
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
								$se='coiitk'; echo('<a href=../reqc.php?ud='.$se.'><font color="#3B5998"><small>View all</small></font></a>');
									
						?>
					  </div>
					  <div class="panel-footer">
						   <form class="form-horizontal" role="form" method="post" action="action.php">
								  <h4>Comment to ask or know about college <small>  @ feel free </small></h4>
								   <div class="form-group" style="padding:14px;">
									<textarea class="form-control" placeholder="@ feel free" name="coiitk"></textarea>
								  </div>
								  
								   <button class="btn btn-success pull-right" type="submit" name="subciitk" value="comment">Post</button><ul class="list-inline"><li><a href="#"><i class="glyphicon glyphicon-align-left"></i></a></li><li><a href="#"><i class="glyphicon glyphicon-align-center"></i></a></li><li><a href="#"><i class="glyphicon glyphicon-align-right"></i></a></li></ul>
								</form>
					  </div>
				</div>
			</div>
		</div>
		<div class="panel panel-primary pull-right col-md-6">
		<div class="panel-heading">News<span class="pull-right"><?php $se='niitk'; echo('<a href=../req.php?ud='.$se.'><font color="white" size="1px">View all</font></a>');?></span></div>
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
				$kcom=$row['niitk'];
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
			<form class="form-horizontal" role="form" method="post" action="niitk.php">
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
<?php require ('colleges/iitkgp.php'); ?>
<?php require ('colleges/iitb.php'); ?>
<?php require ('colleges/iitm.php'); ?>
<?php require ('colleges/iitg.php'); ?>
<?php require ('colleges/iitr.php'); ?>
<?php require ('colleges/iitbhu.php'); ?>
<?php require ('colleges/ismd.php'); ?>
<?php require ('colleges/nitt.php'); ?>
<?php require ('colleges/nitw.php'); ?>
<?php require ('colleges/iiith.php'); ?>



<!--IIT KANPUR ENDS HERE -->
<!--IIT's STARTS  HERE -->

</div>
<?php require ('../../foot.php');?>
<!-- body content ends -->
</html>