<html lang="en">
<head>
<title>Feedback</title>
</head>
<?php require('../upper.php');?>
<body>

<div id="body">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = test_input($_POST["fname"]);
   $email = test_input($_POST["email"]);
   $feed = test_input($_POST["feed"]);
   $college = test_input($_POST["college"]);
   $feed = wordwrap($feed, 70);
   $subject="FEEDBACK";
   $headers   = array();
	$headers[] = "CollegeConnect";
	$headers[] = "Content-type: text/plain; charset=iso-8859-1";
	$headers[] = "From: Sender Email {$email}";
    $headers[] = "Name: Sender Name {$name}";
	$headers[] = "College:{$college}";
	$headers[] = "X-Mailer: PHP/".phpversion();
   mail("abhilashshanker@collegeconnect.in",$subject,$feed,implode("\r\n", $headers));
   mail("romitkumar@collegeconnect.in",$subject,$feed,implode("\r\n", $headers));
   mail("rohitkashyap@collegeconnect.in",$subject,$feed,implode("\r\n", $headers));
    echo '<div class="alert alert-info alert-dismissable">
	  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	  <strong>Thank you!</strong> 
      </div>';
   
   
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<div class="page-header"style="text-align:center;margint-top:30px;"><h1>Feedback </h1></div>
<div class="row">

 <div class="col-lg-8 col-lg-offset-2">
 <form id="defaultForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Name</label>
                                <div class="row"><div class="col-lg-4">
                                    <input type="text" class="form-control" name="fname" placeholder="full name" />
                                </div>
								</div>
                            </div>
							 <div class="form-group">
                                <label class="col-lg-4 control-label">E mail</label>
                                <div class="row"><div class="col-lg-4">
                                    <input type="text" class="form-control" name="email" placeholder="full name" />
                                </div>
								</div>
                            </div>
							<div class="form-group">
                                <label class="col-lg-4 control-label">College</label>
                                <div class="row"><div class="col-lg-4">
                                    <input type="text" class="form-control" name="college" placeholder="College name" />
                                </div>
								</div>
                            </div>
							 <div class="form-group" >
							 <label class="col-lg-4 control-label">Feedback</label>
							 <div class="row"><div class="col-lg-4">
                             <textarea class="form-control" placeholder="what do you think about us" name="feed"></textarea>
							 </div>
                             </div>
							  </div>
							 <div class="form-group" >
							 <label class="col-lg-4 control-label"></label>
							 <div class="row"><div class="col-lg-4">
							 <button class="btn btn-success" type="submit" name="subo" value="Post">Submit</button>
							 </div>
							 </div>
							 </div>
 </form>


</div>
</div>
</div>
</body>
<?php
require('../foot.php');
?>
</html>
