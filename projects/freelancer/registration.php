<?php
session_start();
include('includes/config.php');
if(isset($_POST["email"]))
{
	$fname = $_POST["fname"];
	$email = $_POST["email"];
	$fmob = $_POST["fmob"];
	$pass = $_POST["password"];
	 $pass = MD5($pass);

$duplicate=mysqli_query($mysqli,"SELECT * from users where type='FL' AND mobile='$fmob' or email='$email' ");
	if (mysqli_num_rows($duplicate) > 0)
	{
		echo "<script> alert('MOBILE or EMAIL is repeated'); </script>";
		
	}
	else if($fname == '')
	{
		echo "<script> alert('Please submit your name'); </script>";
		
	}	
	else if($email =='')
	{
		echo "<script> alert('Please submit your email'); </script>";
		
	}
	else if($fmob =='')
	{
		echo "<script> alert('Please submit your mobile number'); </script>";
		
	}
	else if($pass =='')
	{
		echo "<script> alert('Please submit your password'); </script>";
	}
	else
	{
	 $query = mysqli_query($mysqli, "INSERT INTO `users`(`name`, `email`, `mobile`, `password`, `type`, `status`, 
	 	`logs`) VALUES ('$fname', '$email', '$fmob', '$pass', 'FL', 'NO', '$logs')");
		if($query)
		{

			echo "<script> alert('Please check out your mail.'); </script>";
			

				// $txt = "We have received your application of registration. It will be approved soon.";
                $to=$_POST['email'];
                $subject = "exincorp PROJECTS REGISTRATION";
                $headers = "From: info@exincorpprojects.com";
		        $msg  = "We have received your application of registration. It will be approved soon."  ;
                mail($to,$subject,$msg,$headers);


            $name = nl2br($_POST['fname']);
			$email = nl2br($_POST['email']);
			$MobileNumber = nl2br($_POST['fmob']);    
            $tto="chitturiarunkrishna@gmail.com";
            // $tto="selva@exincorps.in";
            $ssubject = "exincorp PROJECTS PARTNER APPROVAL";
            $hseaders = "From: info@exincorpprojects.com" ;
			$mmsg = "This Free Lancer is requesting for your approval.".$name.$email.$MobileNumber;
            mail($tto,$ssubject,$mmsg,$hseaders);
		}
		else
		{
			echo "<script> alert('not registered something error'); </script>";
		}
	}
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>

        <!-- ========== COMMON STYLES ========== -->
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >

        <!-- ========== PAGE STYLES ========== -->
        <link rel="stylesheet" href="css/icheck/skins/flat/blue.css" >

        <!-- ========== THEME CSS ========== -->
        <link rel="stylesheet" href="css/main.css" media="screen" >

        <!-- ========== MODERNIZR ========== -->
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="">
        <div class="main-wrapper">

            <div class="login-bg-color bg-black-300">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel login-box">
                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    <h4>REGISTRATION PAGE</h4>
                                </div>
                            </div>
                            <div class="panel-body p-20">

                                <div class="section-title">
                                    <p class="sub-title text-muted">All Fields Are Required</p>
                                </div>

                                <form action="reg.php" method="post" name="email">
                                    <div class="form-group">
                                		<label>Full Name</label>
                                        <input type="text" name="fname" required="" class="form-control" placeholder="Enter Your Full Name" >
                                	</div>
                                	<div class="form-group">
                                		<label>Email Address</label>
                                        <input type="email" name="email" required="" class="form-control" placeholder="Enter Your Email Id" >
                                	</div>
                                	<div class="form-group">
                                		<label>Mobile number</label>
                                        <input type="number" name="fmob" required="" class="form-control" placeholder="Enter Your Mobile number" >
                                	</div>
                                	<div class="form-group">
                                		<label>Password</label>
                                		<input type="password" name="password" required="" class="form-control" placeholder="Password">
                                	</div>
                                    <div class="checkbox op-check">
                                        <label>
                                            <input type="checkbox" name="remember" required="" class="flat-blue-style"> <span class="ml-10">I agree <a href="#">terms & conditions</a></span>
                                        </label>
                                    </div>
                                    <div class="form-group mt-20">

                                            <a href="index.php" class="form-link"><small class="muted-text">Already Registered?</small></a>
                                          
                                           <button name="submit" type="submit" class="btn btn-success btn-labeled pull-right">Register<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>


                                    </div>
                                </form>

                                <hr>

                                <h5 class="text-center mt-10 mb-20">Or Register With</h5>

                                <div class="text-center">
                                    <button type="button" class="btn btn-primary bg-primary-600 btn-labeled">Facebook<span class="btn-label btn-label-right"><i class="fa fa-facebook"></i></span></button>
                                    <button type="button" class="btn btn-primary bg-primary-300 btn-labeled ml-5">Twitter<span class="btn-label btn-label-right"><i class="fa fa-twitter"></i></span></button>
                                    <button type="button" class="btn btn-danger bg-danger-300 btn-labeled ml-5">Google<span class="btn-label btn-label-right"><i class="fa fa-google-plus"></i></span></button>
                                </div>
                                <!-- /.text-center -->

                            </div>
                        </div>
                        <!-- /.panel -->
                        <p class="text-muted text-center"><small>Copyright © RebackProjects2019</small></p>
                    </div>
                    <!-- /.col-md-6 col-md-offset-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){
                $('input.flat-blue-style').iCheck({
                    checkboxClass: 'icheckbox_flat-blue'
                });
            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
