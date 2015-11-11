<html>
<head>
<link href="../bs/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="../default.css" rel="stylesheet" type="text/css" media="screen" />
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
			<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js"></script>
</head>
<body>
<?php  session_start();require ('../upper.php') ?>
<div id="body">
<div class="panel panel-primary" style="margin-top:5%;">
<div class="panel-heading">All</div>
  <div class="panel-body">
<?php 
		$get=$_GET['ud'];
		$offset = isset($_GET['p'])?($_GET[p]-1)*10:0;

		require('connect.php');
		$sqll="SELECT * FROM  comment ORDER BY uid DESC ".($offset?"LIMIT 10 OFFSET $offset":"");
		$sql = "SELECT count(*) FROM comment ";
		$que=mysql_query($sql);
		$page=$que/10;
		$tname=mysql_query($sqll);
		while(($row = mysql_fetch_array($tname)))
		{
			$id=$row['uid'];
			$name=$row['name'];
			$kcom=$row[$get];
			$kclg=$row['college'];
			$email=$row['email'];
			if($kcom != null)
			{
				if(isset($_SESSION['femail']) && $_SESSION['femail']!="")
				{
					$kemail=$_SESSION['femail'];
					$ksetclg=$_SESSION['fclg'];
				} else {
					$kemail="";
				}
				if ($kemail == $email)
				{
					$delink="<a href=\"delete.php?ud=".$id."\">Delete</a>";
				} else {
					$delink="";
				}
				if ($kclg == $ksetclg)
				{
					echo ('<div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="../assets/img/y.jpg" alt="...">
  </a>
  <div class="media-body">
    <h5 class="media-heading"><small>'.$name.'</small></h5>
    '.$kcom.'
  </div>
</div>');
		}
		}
		}
		
?>
  </div>
  <div class="panel-footer">
 <ul class="pagination">
  <li  <?php echo $offset?'':'class="disabled"'; ?>><a href="#">&laquo;</a></li>
<?php 	
	for($i=1; $i<=$offset; $i++){ 
?>
  <li><a href="<?php  echo $_SERVER['PHP_SELF'].'?md='.$get.'&p='.$i;?>"><?php echo $i; ?></a></li>
<?php  } ?>
  <li><a href="#">&raquo;</a></li>
</ul>
</div>
</div>
</div>
<?php require ('../foot.php'); ?>
</body>
</html>
