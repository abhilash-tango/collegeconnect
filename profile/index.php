<html lang="en">
<?php session_start();
require ('../pages/decide.php');?>
<head>
<link href="../bs/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="../default.css" rel="stylesheet" type="text/css" media="screen" />
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
			<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js"></script>
			
</head>
<body>
<?php 
require ('../upper.php');
require ('stream.php');
?>
<div id="profile1">
<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
  <li><a href="#posts" data-toggle="tab">Posts</a></li>
  <li><a href="#mass" data-toggle="tab">Mass mail</a></li>
  <li><a href="#profile" data-toggle="tab">Profile</a></li>
  <li><a href="#settings" data-toggle="tab">Settings</a></li>
  
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home">
  <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><?php $name=$_SESSION['pname']; echo('Welcome   '.$name.'  &nbsp &nbsp &nbsp<small><font color="white"><i>Lots of stuff waiting for you</i></font></small>'); ?></h3>
  </div>
  <div class="panel-body">
    <div class="panel panel-primary">
  <div class="panel-heading">Your College News<span class="pull-right"><?php $id=$_SESSION['fclg'];$se=news($id); echo('<a href=req.php?ud='.$se.'><font color="white">View all</font></a>');?></span></div>
  <div class="panel-body">
    <!--Panel1 content STARTS-->
	<?php require ('hpanel1.php'); ?>

  </div>
</div>
  </div>
   <div class="panel-body">
    <div class="panel panel-primary">
  <div class="panel-heading">Your Stream News<span class="pull-right"><?php  $se='anew'; echo('<a href=reqs.php?ud='.$se.'><font color="white">View all</font></a>');?></span></div>
  <div class="panel-body">
    <!--Panel2 content STARTS-->
	<?php require('hpanel2.php'); ?>
  </div>
</div>
  </div>
   <div class="panel-body">
    <div class="panel panel-primary">
  <div class="panel-heading">Others<span class="pull-right"><?php $se='anew'; echo('<a href=reqo.php?ud='.$se.'><font color="white">View all</font></a>');?></span></div>
  <div class="panel-body">
    <!--Panel3 content STARTS-->
	<?php require ('hpanel3.php'); ?>
  </div>
</div>
  </div>
</div></div>
 <div class="tab-pane" id="mass"><?php require ('massmail.php'); ?></div>
  <div class="tab-pane" id="profile"><?php require ('profile.php'); ?></div>
  
  <div class="tab-pane" id="posts">
  <div class="well">
    <div class="well" style="width:60%;"> 
             <form class="form-horizontal" role="form" method="post" action="post.php">
              <h4>Post any news of your college <small>  @ make your mates know whats happening </small></h4>
               <div class="form-group" style="padding:14px;">
                <textarea class="form-control" placeholder="Update newsletter of your college"  name="coiitk"></textarea>
              </div>
              
               <button class="btn btn-success pull-right" type="submit" name="subciitk" value="1">Post</button><ul class="list-inline"><li><a href="#"><i class="glyphicon glyphicon-align-left"></i></a></li><li><a href="#"><i class="glyphicon glyphicon-align-center"></i></a></li><li><a href="#"><i class="glyphicon glyphicon-align-right"></i></a></li></ul>
            </form>
        </div>
				<div class="panel panel-primary">
		<div class="panel-heading">Questions or Comments for your college<span class="pull-right"><?php $id=$_SESSION['fclg'];$se=comment($id); echo('<a href=req.php?ud='.$se.'><font color="white">View all</font></a>');?></span></div>
  <div class="panel-body">
    <?php require ('hpanel4.php'); ?>
  </div>
  <div class="panel-footer">
   <div class="well" style="width:60%;"> 
             <form class="form-horizontal" role="form" method="post" action="post.php">
              <h4>Answer for your college <small>  @ make other know about your college </small></h4>
               <div class="form-group" style="padding:14px;">
                <textarea class="form-control" placeholder="Feel pride for your college" name="coiitk"></textarea>
              </div>
              
               <button class="btn btn-success pull-right" type="submit" name="subciitk" value="2">Post</button><ul class="list-inline"><li><a href="#"><i class="glyphicon glyphicon-align-left"></i></a></li><li><a href="#"><i class="glyphicon glyphicon-align-center"></i></a></li><li><a href="#"><i class="glyphicon glyphicon-align-right"></i></a></li></ul>
            </form>
        </div></div>
</div>
</div>
</div>

  <div class="tab-pane" id="settings"><?php require ('setting.php'); ?></div>
</div>
</div>
<?php require ('../foot.php'); ?>
</body>

</html>