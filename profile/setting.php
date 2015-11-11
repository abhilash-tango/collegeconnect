  <?php  
 require ('connect.php');

$email=$_SESSION['femail']; 
$sql="SELECT * FROM  users WHERE email='".$email."'  LIMIT 1";
$tname=mysql_query($sql);
$row = mysql_fetch_array($tname);
$fnam=$row['firstn'];
$lnam=$row['lastn'];
$coll=$row['college'];
$mail=$row['email'];
$line=stream($coll);
 echo('      <div class="well"> <div class="row">
            <!-- form: -->
            <section>
                

                <div class="col-lg-8 col-lg-offset-2">
                    <form id="defaultForm" method="post" action="setting_a.php" class="form-horizontal">
                        
                           

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Name</label>
                                <div class="row"><div class="col-lg-2">
                                    <input type="text" class="form-control" name="fname" placeholder='.$fnam.' />
                                </div>
								<div class="col-lg-2">
                                    <input type="text" class="form-control" name="lname" placeholder='.$lnam.' />
                                </div></div>
                            </div>

                         
                        

                        

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Email address</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" name="email"  placeholder='.$mail.' />
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Password</label>
                                <div class="col-lg-5">
                                    <input type="password" class="form-control" name="password" />
                                </div>
                            </div>

                            
                            
                            
                       

                        <div class="form-group">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <!-- :form -->
        </div>
    </div>');?>