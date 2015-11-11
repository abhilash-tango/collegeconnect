<div class="panel panel-primary">
<div class="panel-heading">Massmail <small>this posts are only visible to your college mates</small><span class="pull-right"><?php $id=$_SESSION['fclg'];$se=news($id); echo('<a href=req.php?ud='.$se.'><font color="white">View all</font></a>');?></span></div>
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
		$kcom=$row['massmail'];
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
		{
		echo ('<div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="../assets/img/y.jpg" alt="...">
  </a>
  <div class="media-body">
    <h5 class="media-heading"><b>'.$kclg.'</b></h5>
    '.$kcom.'
  </div>
</div>');$c=$c+1;
		}
		}
		}
		
?>

  </div>
  <div class="panel-footer">
  <div class="well" style="width:60%;"> 
             <form class="form-horizontal" role="form" method="post" action="massmail_a.php">
              <h4>Massmail <small>  @ tell something to your collegemates </small></h4>
               <div class="form-group" style="padding:14px;">
                <textarea class="form-control" placeholder="Massmail for  your college" name="coiitk"></textarea>
              </div>
              
               <button class="btn btn-success pull-right" type="submit" name="subciitk" value="comment">Post</button><ul class="list-inline"><li><a href="#"><i class="glyphicon glyphicon-align-left"></i></a></li><li><a href="#"><i class="glyphicon glyphicon-align-center"></i></a></li><li><a href="#"><i class="glyphicon glyphicon-align-right"></i></a></li></ul>
            </form>
        </div></div>
</div>