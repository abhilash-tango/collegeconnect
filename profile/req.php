<html>
<head>

</head>
<body>
<?php  session_start();require ('../upper.php');
require ('stream.php'); ?>
<div id="body">
<div class="panel panel-primary" style="margin-top:5%;">
<div class="panel-heading">All</div>
  <div class="panel-body">
<?php 
		define('POST_PER_PAGE',10,true);
		$get=$_GET['ud'];
		$offset = isset($_GET['p'])?($_GET['p']-1)*POST_PER_PAGE:0;
		require('connect.php');
		$sqll="SELECT * FROM  comment WHERE $get!='' ORDER BY uid DESC LIMIT ".POST_PER_PAGE." OFFSET ".$offset;
		
		$tname=mysql_query($sqll);
		$sql2 = "SELECT count(*) as posts FROM comment WHERE $get!='' ";
		$cntqu = mysql_query($sql2);
		$cntrow = mysql_fetch_array($cntqu);
		$page = ceil($cntrow['posts']/POST_PER_PAGE);
		while(($row = mysql_fetch_array($tname)))
		{
			$id=$row['uid'];
			$name=$row['name'];
			$kcom=$row['anew'];
			$kclg=$row['college'];
			$email=$row['email'];
			$strea=$row['stream'];
			
			if($kcom != null)
			{
				if(isset($_SESSION['femail']) && $_SESSION['femail']!="")
				{
					$kemail=$_SESSION['femail'];
					$ksetclg=$_SESSION['fclg'];
					$stre=stream($ksetclg);
				}
				
				else {
					$kemail="";
				}
				if ($kemail == $email)
				{
					$delink="<a href=\"delete.php?ud=".$id."\">Delete</a>";
				} else {
					$delink="";
				}
				if ($kclg == $ksetclg)
				{$img=image($kclg);
					echo ('<div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="../assets/img/'.$img.'.jpg" alt="...">
  </a>
  <div class="media-body">
    <h5 class="media-heading"><b>'.$kclg.'<small> @'.$name.'</small></b></h5>
    '.$kcom.'<br/>'.$delink.'
  </div>
</div>');
		}
		}
		}
?>
  </div>
  <div class="panel-footer">
 <ul class="pagination">
  <li  <?php echo $offset?'><a href="'.$_SERVER['PHP_SELF'].'?ud='.$get.'&p='.($offset-1):'class="disabled"><a href="#'; ?>">&laquo;</a></li>
<?php 	
	for($i=1; $i<=$page; $i++){ 
?>
  <li <?php if($i==$offset/POST_PER_PAGE+1) echo 'class="active"';?>><a href="<?php  echo $_SERVER['PHP_SELF'].'?ud='.$get.'&p='.$i;?>"><?php echo $i; ?></a></li>
<?php  } 
?>
  <li <?php echo !($page-$offset)?'class="disabled"><a href="#':'><a href="'.$_SERVER['PHP_SELF'].'?ud='.$get.'&p='.($offset/POST_PER_PAGE+2); ?>">&raquo;</a></li>
</ul>
</div>
</div>
</div>
<?php require ('../foot.php'); ?>
</body>
</html>
