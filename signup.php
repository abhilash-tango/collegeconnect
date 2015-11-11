<!DOCTYPE html>
<html>
<head>
    <title>SignUp</title>

    <link rel="stylesheet" href="jq/vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="jq/dist/css/bootstrapValidator.css"/>
       <link href="default.css" rel="stylesheet" type="text/css" media="screen" />
    <script type="text/javascript" src="jq/vendor/jquery/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="jq/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="jq/dist/js/bootstrapValidator.js"></script>
	
	
</head>
<?php 
 session_start();
if(isset($_SESSION['femail']) && $_SESSION['femail']!="")
		{ 
		echo('<div class="alert alert-danger"><strong>You are already a member ! 
  <a href="index.php" class="alert-link">Return to homepage</a>
</div>');
		}
		else
		{?>
<body>
<!--upper part starts-->
		 <!--whole nav div wrap starts from here TO BE COPIED ON EVERY PAGE START COPYING START-->
		 <div>
		 <!-- header-->
		 <div id="header">
			  <div id="head1"><font color="white">
			   CollegeConnect</font></div>
			  
		 </div>
		  <!-- nav wrap-->
		  <div id="nav">
			 <div id="menu" style="width:100%;">

			 <ul style="margin-left:5%;">
				 <a href="/edited/index.php" <li div="uni">	<span class="glyphicon glyphicon-home white" style="font-size: 20px;padding-bottom: 6px;
				 display: inline-table;
					 vertical-align: bottom;"></span></li>	</a>
					<li ><a href="#">Engineering</a>
					  <ul class="sub-menu">
						<li><a href="/edited/pages/engg_p/engg_p.php"> Private</a></li>
						<li><a href="/edited/pages/engg_g/engg_g.php">Goverment</a></li></ul></li>
					<li ><a href="#">Medical</a>
						<ul class="sub-menu">
							<li><a href="/edited/pages/med_p/med_p.php"> Private</a></li>
							<li><a href="/edited/pages/med_g/med_g.php">Goverment</a></li></ul></li>
					<li ><a href="/edited/pages/mang/mang.php">Management</a>
						</li>
					
					<li ><a href="/edited/pages/law/law.php">Law</a>
						</li>
					</ul>

			  </div>	

		 </div>
		 </div>
		 <!--whole nav div wrap ends here STOP COPYING BAS KAR BE END-->
		 <!--upper part end--><div id="signheader"><p style="font-size:25px;font-family:arial;color:white;margin-left:10%;letter-spacing:5px;padding-top:20px;">SignUp</p></div>
		 <!--sign up code start START -->
   <div class="signcontent" style="margin-left:10%;margin-right:10%;margin-top:1%;margin-bottom:1%;padding-top:48px;border-style:solid;border-radius:6px;border-color:#8b9dc3	;background-color:#dfe3ee;">
        <div class="row">
            <!-- form: -->
            <section>
                

                <div class="col-lg-8 col-lg-offset-2">
                    <form id="defaultForm" method="post" action="signupa.php" class="form-horizontal">
                        
                           

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Name</label>
                                <div class="row"><div class="col-lg-2">
                                    <input type="text" class="form-control" name="fname" placeholder="first name" />
                                </div>
								<div class="col-lg-2">
                                    <input type="text" class="form-control" name="lname" placeholder="last name" />
                                </div></div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">College</label>
                                <div class="col-lg-5">
                                    <select class="form-control" name="college">
									<option value="">--Select College--</option>
                                        <optgroup label="Engineering">
	 <option data-subtext="Goverment" value="Indian Institute of Technology(IIT) Kanpur">Indian Institute of Technology(IIT) Kanpur</option>
    <option data-subtext="Goverment" value="Indian Institute of Technology(IIT) Kharagpur">Indian Institute of Technology(IIT) Kharagpur</option>
   <option data-subtext="Goverment" value="Indian Institute of Technology(IIT) Bombay">Indian Institute of Technology(IIT) Bombay</option>
	 <option data-subtext="Goverment" value="Indian Institute of Technology(IIT) Madras">Indian Institute of Technology(IIT) Madras</option>
	 <option data-subtext="Goverment" value="Indian Institute of Technology(IIT) Guwahati">Indian Institute of Technology(IIT) Guwahati</option>
	   <option data-subtext="Goverment" value="Indian Institute of Technology(IIT) Roorkee">Indian Institute of Technology(IIT) Roorkee</option>
	   <option data-subtext="Goverment" value="Indian Institute of Technology(IIT) BHU ,VARANASI">Indian Institute of Technology(IIT) BHU ,VARANASI</option>
	   <option data-subtext="Goverment" value="Indian School Of Mines(ISM) Dhanbad">Indian School Of Mines(ISM) Dhanbad</option>
		 <option data-subtext="Goverment" value="National Institute Of Technology(NIT) Trichy">National Institute Of Technology(NIT) Trichy</option>
		  <option data-subtext="Goverment" value="National Institute Of Technology(NIT) Warangal">National Institute Of Technology(NIT) Warangal</option>
		  <option data-subtext="Goverment" value="Indian Institute Of Information Technology(IIIT) Hyderabad">Indian Institute Of Information Technology(IIIT) Hyderabad</option>
		  <option data-subtext="Private" value="Birla Institute Of Technology and Science(BITS) Pilani">Birla Institute Of Technology and Science(BITS) Pilani</option>
		  <option data-subtext="Private" value="PSG College of Technology Coimbtore">PSG College of Technology Coimbtore</option>
		  <option data-subtext="Private" value="Birla Institute Of Technology(BIT) Mesra">Birla Institute Of Technology(BIT) Mesra</option>
		  <option data-subtext="Private" value="Dhirubhai Ambani Institute Of Engineering and Technology(DAIICT) Gandhinagar">Dhirubhai Ambani Institute Of Engineering and Technology(DAIICT) Gandhinagar</option>
		   <option data-subtext="Private" value="Thapar Institute Of Engineering and Technology Patiala">Thapar Institute Of Engineering and Technology Patiala</option>
		    <option data-subtext="Private" value="R V College Of Engineering Banglore">R V College Of Engineering Banglore</option>
			<option data-subtext="Private" value="Vellore Institute Of Technology Vellore">Vellore Institute Of Technology Vellore</option>
			<optgroup>
			<optgroup label="Medical">
	         <option data-subtext="Goverment" value="All Indian Institute Of Medical Science(AIIMS) Delhi">All Indian Institute Of Medical Science(AIIMS) Delhi</option>
			 <option data-subtext="Goverment" value="Armed Forces Medical College(AFMC) ,Pune">Armed Forces Medical College(AFMC) ,Pune</option>
			  <option data-subtext="Goverment" value="Jawaharlal Institute of Postgraduate Medical Education and Research(JIPMER) ,Pondicherry">Jawaharlal Institute of Postgraduate Medical Education and Research(JIPMER) ,Pondicherry</option>
			  <option data-subtext="Goverment" value="Maulana Azad Medical College(MAMC) ,Delhi">Maulana Azad Medical College(MAMC) ,Delhi</option>
			  <option data-subtext="Goverment" value="Institute Of Medical Science(IMS) BHU">Institute Of Medical Science(IMS) BHU</option>
			  <option data-subtext="Private" value="Christian Medical College & Hospital(CMC) Vellore">Christian Medical College & Hospital(CMC) Vellore</option>
			  <option data-subtext="Private" value="St. John Medical College, Banglore">St. John Medical College, Banglore</option>
			  <option data-subtext="Private" value="Kasturba Medical College ,Manipal">Kasturba Medical College ,Manipal</option>
			  <option data-subtext="Private" value="Sri Ramchandra Medical College ,Chennai">Sri Ramchandra Medical College ,Chennai</option>
			  <option data-subtext="Private" value="Mahatma Gandhi Institute of Medical Sciences ,Wardha">Mahatma Gandhi Institute of Medical Sciences ,Wardha</option>
			  <option data-subtext="Private" value="M.S. Ramaiah Medical College ,Banglore">M.S. Ramaiah Medical College ,Banglore</option>
			  
			 </optgroup>
			 <optgroup label="Management">
			  <option data-subtext="Goverment" value="Indian Institute Of Management(IIM) Banglore">Indian Institute Of Management(IIM) Banglore</option>
			  <option data-subtext="Goverment" value="Indian Institute Of Management(IIM) Ahmedabad">Indian Institute Of Management(IIM) Ahmedabad</option>
			  <option data-subtext="Goverment" value="Indian Institute Of Management(IIM) Lucknow">Indian Institute Of Management(IIM) Lucknow</option>
			  <option data-subtext="Goverment" value="Indian Institute Of Management(IIM) Calcutta">Indian Institute Of Management(IIM) Calcutta</option>
			  <option data-subtext="Goverment" value="Indian Institute Of Management(IIM) Indore">Indian Institute Of Management(IIM) Indore</option>
			  <option data-subtext="Government" value="Faculty of Management Studies DU ,Delhi">Faculty of Management Studies DU ,Delhi</option>
			  <option data-subtext="Private" value="Management Development Institute(MDI) ,Gurgaon">Management Development Institute(MDI) ,Gurgaon</option>
			  <option data-subtext="Private" value="Xavier Labour Relations Institute of Management(XLRI) Jamshedpur">Xavier Labour Relations Institute of Management(XLRI) Jamshedpur</option>
			   
			  </optgroup>
			  <optgroup label="Law">
			      <option data-subtext="Goverment" value="National Law School of India University(NLSIU) Banglore">National Law School of India University(NLSIU) Banglore</option>
				  <option data-subtext="Goverment" value="Nalsar University of Law , Hyderabad">Nalsar University of Law , Hyderabad</option>
				  <option data-subtext="Goverment" value="West Bengal National University of Juridical Sciences(NUJS) ,Kolkata">West Bengal National University of Juridical Sciences(NUJS) ,Kolkata</option>
				  <option data-subtext="Goverment" value="National Law University ,Jodhpur">National Law University ,Jodhpur</option>
				  <option data-subtext="Goverment" value="National Law Institute University(NLIU) ,Bhopal">National Law Institute University(NLIU) ,Bhopal</option>
				  <option data-subtext="Goverment" value="Faculty Of Law DU ,Delhi">Faculty Of Law DU ,Delhi</option>
				   <option data-subtext="Goverment" value="ILS Law College ,Pune">ILS Law College ,Pune</option>
				    <option data-subtext="Private" value="Symbiosis Society Law College ,Pune">Symbiosis Society Law College ,Pune</option>
					 <option data-subtext="Private" value="Amity Law School ,Delhi">Amity Law School ,Delhi</option>
					  <option data-subtext="Goverment" value="Government Law College ,Mumbai">Government Law College ,Mumbai</option>
			  </optgroup>
			  <optgroup>
			  <optgroup label="Other">
			  <option  value="Student">Student</option>
			  </optgroup>
                                    </select>
                                </div>
                            </div>

                        

                        

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Email address</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" name="email"  placeholder="email" />
                                </div>
                            </div>
                               <div class="form-group">

                                <label for="gender" class="col-lg-3 control-label">Gender</label>
                                 <div class="checkbox-inline">
                                
                                  <input type="radio" name="gender" id="optionsRadios1" value="Male" checked>Male
                                    
                                      </div>
                                      <div class="checkbox-inline">
                                         
                                          <input type="radio" name="gender" id="optionsRadios2" value="Female">Female
                                            
                                         </div>
                                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Password</label>
                                <div class="col-lg-5">
                                    <input type="password" class="form-control" name="password" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Retype password</label>
                                <div class="col-lg-5">
                                    <input type="password" class="form-control" name="confirmPassword" />
                                </div>
                            </div>
                   
                            
                            
                        <div class="form-group">
                            <label class="col-lg-3 control-label" id="captchaOperation"></label>
                            <div class="col-lg-2">
                                <input type="text" class="form-control" name="captcha" />
                            </div>
                        </div>
						<div class="form-group">
                                <div class="col-lg-9 col-lg-offset-3">
                                    <div class="checkbox">
                                        <input type="checkbox" name="acceptTerms" /> <a data-toggle="modal" data-target="#myModal1">Accept terms and policies</a><?php require ('foot_files/data_policy.php'); ?>
                                    </div>
                                </div>
                            </div>

                        <div class="form-group">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <!-- :form -->
        </div>
    </div>
		<!--foot starts to be copied on every page START-->
	<?php require ('foot.php');?>
		<!--foot ends end copying END -->

<script type="text/javascript">
<!--sign up code ends ENDS -->
$(document).ready(function() {
function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 10), '+', randomNumber(1, 10), '='].join(' '));
    $('#defaultForm').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            fname: {
                message: 'firstname is not valid',
                validators: {
                    notEmpty: {
                        message: 'firstname is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 1,
                        max: 30,
                        message: 'firstname must be more than 1 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-z ,.'-]+$/i,
                        message: 'firstname can only consist of alphabets'
                    }
                }
            },
            college: {
                validators: {
                    notEmpty: {
                        message: 'college is required and can\'t be empty'
                    }
                }
            },
            acceptTerms: {
                validators: {
                    notEmpty: {
                        message: 'You have to accept the terms and policies'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
           
           
           
          
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
			captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            }
           
        }
    });
});
</script>

</body>
<?php }?>
</html>