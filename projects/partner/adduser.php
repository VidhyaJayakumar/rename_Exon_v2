<?php
session_start();
if(!isset($_SESSION["id"]))
{
    header('location: index.php');
}
include('includes/config.php');
$id = $_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DASHBOARD</title>

        <!-- ========== COMMON STYLES ========== -->
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >

        <!-- ========== PAGE STYLES ========== -->
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->

        <!-- ========== THEME CSS ========== -->
        <link rel="stylesheet" href="css/main.css" media="screen" >

        <!-- ========== MODERNIZR ========== -->
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
            <nav class="navbar top-navbar bg-white box-shadow">
                <div class="container-fluid">
                    <div class="row">
                        <div class="navbar-header no-padding">
                            <a class="navbar-brand">
                                <img src="https://exoncorpprojects.com/rb.png" alt="Options - Admin Template" class="logo">
                            </a>
                            <span class="small-nav-handle hidden-sm hidden-xs">
                                <i class="fa fa-outdent"></i>
                            </span>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <button type="button" class="navbar-toggle mobile-nav-toggle" >
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <!-- /.navbar-header -->
                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <li class="hidden-sm hidden-xs">
                                    <a href="#" class="user-info-handle"><i class="fa fa-user"></i></a>
                                </li>
                                <li class="hidden-sm hidden-xs"><a href="#" class="full-screen-handle"><i class="fa fa-arrows-alt"></i></a></li>
                            </ul>
                            <!-- /.nav navbar-nav -->

                            <?php 
                                $msql="SELECT * FROM users WHERE id = '$id'";
                                $res = mysqli_query($mysqli,$msql);
                                $count = mysqli_num_rows($res);
                                while($num = mysqli_fetch_array($res))
                                {
                                     $email = $num['email'];
                                     $name = $num['name'];
                                     $profile = $num['profile'];
                                }
                            ?>

                           <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <!-- /.dropdown -->
                                <li class="dropdown tour-two">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $email; ?>
                                    <span class="caret"></span>
                                    </a>
                                     <ul class="dropdown-menu profile-dropdown">
                                        <li class="profile-menu bg-gray">
                                            <div class="">
                                               <!--  <img src="https://exoncorpprojects.com/rb.png"  class="img-circle profile-img"> -->
                                               <?php 
                                                if($profile == '')
                                                {


                                                ?>  
                                                    <img src="https://exoncorpprojects.com/rb.png" alt="User Avatar" class="img-circle profile-img">
                                                <?php 
                                                } 
                                                else
                                                {
                                                ?>
                                                <!-- <?php echo $profile; ?> -->
                                                <img src="profile/<?php echo $profile; ?>" alt="User Avatar" class="img-circle profile-img">
                                            <?php } ?>
                                                <div class="profile-name">
                                                    <h6><?php echo $name; ?></h6>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                        <li><a href="profile.php"><i class="fa fa-sliders"></i>VIEW PROFILE</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="logout.php" class="color-danger text-center"><i class="fa fa-sign-out"></i> Logout</a></li>
                                    </ul>
                                </li>
                                <!-- /.dropdown -->
                               
                            </ul>
                            <!-- /.nav navbar-nav navbar-right -->
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </nav>

            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                    <div class="left-sidebar fixed-sidebar bg-black-300 box-shadow tour-three">
                        <div class="sidebar-content">
                            <div class="user-info closed">
                                <h6 class="title"><?php echo $name; ?></h6>
                                <small class="info">exoncorp Projects</small>
                            </div>
                            <!-- /.user-info -->

                            <div class="sidebar-nav">
                                <ul class="side-nav color-gray">
                                    <li class="nav-header">
                                        <span class="">Main Category</span>
                                    </li>
                                    <li>
                                        <a href="dashboard.php">
                                            <i class="fa fa-dashboard"></i> 
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                </ul>

                                <ul class="side-nav color-gray">
                                    <li class="nav-header">
                                        <span class="">PROJECTS</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart"></i> 
                                            <span>Request project</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="adduser.php">
                                            <i class="fa fa-users"></i> 
                                            <span>Add User</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="addproject.php">
                                            <i class="fa fa-shopping-cart"></i> 
                                            <span>Add Project</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.sidebar-nav -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>
                    <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Form - Validations</h2>
                                    <p class="sub-title">One stop solution for perfect admin dashboard!</p>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6 right-side">
                                    <a class="btn bg-black toggle-code-handle" role="button">Toggle Code!</a>
                                </div>
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            							<li class="active">Form - Validations</li>
            						</ul>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6 text-right">
                                    <a href="#"><i class="fa fa-comments"></i> Talk to us</a>
                                    <a href="#" class="pl-20"><i class="fa fa-cog"></i> Settings</a>
                                </div>
                                <!-- /.col-md-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Two Column Form</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                <form class="p-20" id="two-column">
                                                    <h5 class="underline mt-n">Account Info</h5>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                        		<label for="name13">Full Name <sup class="color-danger">*</sup></label>
                                                        		<input type="text" class="form-control" id="name13" placeholder="Enter Your Full Name" data-validation="required">
                                                        	</div>
                                                        </div>
                                                        <!-- /.col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                        		<label for="username13">Username <sup class="color-danger">*</sup></label>
                                                        		<input type="text" class="form-control" id="username13" placeholder="Enter Desired Username" data-validation="length" data-validation-length="min5">
                                                        	</div>
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                        		<label for="exampleInputEmail13">Email address <sup class="color-danger">*</sup></label>
                                                        		<input type="email" class="form-control" id="exampleInputEmail13" placeholder="Enter Your Email Id" data-validation="email" >
                                                        	</div>
                                                    	</div>
                                                    	<!-- /.col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                        		<label for="contact13">Contact Number</label>
                                                        		<input type="text" class="form-control" id="contact13" placeholder="Enter Your Mobile Phone Number">
                                                        	</div>
                                                    	</div>
                                                    	<!-- /.col-md-6 -->
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                        		<label for="exampleInputPassword13">Password <sup class="color-danger">*</sup></label>
                                                        		<input type="password" class="form-control" id="exampleInputPassword13" name="pass" placeholder="Enter Strong Password" data-validation="length" data-validation-length="min8">
                                                        	</div>
                                                    	</div>
                                                    	<!-- /.col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                        		<label for="exampleInputPassword14">Confirm Password <sup class="color-danger">*</sup></label>
                                                        		<input type="password" class="form-control" id="exampleInputPassword14" placeholder="Confirm your password" data-validation="confirmation" data-validation-confirm="exampleInputPassword13">
                                                        	</div>
                                                    	</div>
                                                    	<!-- /.col-md-6 -->
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group checkbox">
                                                        		<label>
                                                        			<input type="checkbox" data-validation="required"> I accept <a href="#" class="color-primary">terms & conditions</a>
                                                        		</label>
                                                        	</div>
                                                        </div>
                                                        <!-- /.col-md-12 -->

                                                        <div class="col-md-12">
                                                            <div class="btn-group pull-right mt-10" role="group">
                                                                <button type="reset" class="btn btn-gray btn-wide"><i class="fa fa-times"></i>Cancel</button>
                                                                <button type="submit" class="btn bg-black btn-wide"><i class="fa fa-arrow-right"></i>Submit</button>
                                                            </div>
                                                            <!-- /.btn-group -->
                                                        </div>
                                                        <!-- /.col-md-12 -->
                                                    </div>

                                                </form>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;form class="p-20" id="two-column"&gt;
    &lt;h5 class="underline mt-n"&gt;Account Info&lt;/h5&gt;

    &lt;div class="row"&gt;
        &lt;div class="col-md-6"&gt;
            &lt;div class="form-group"&gt;
                &lt;label for="name13"&gt;Full Name &lt;sup class="color-danger"&gt;*&lt;/sup&gt;&lt;/label&gt;
                &lt;input type="text" class="form-control" id="name13" placeholder="Enter Your Full Name" data-validation="required"&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- /.col-md-6 --&gt;

        &lt;div class="col-md-6"&gt;
            &lt;div class="form-group"&gt;
                &lt;label for="username13"&gt;Username &lt;sup class="color-danger"&gt;*&lt;/sup&gt;&lt;/label&gt;
                &lt;input type="text" class="form-control" id="username13" placeholder="Enter Desired Username" data-validation="length" data-validation-length="min5"&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- /.col-md-6 --&gt;
    &lt;/div&gt;

    &lt;div class="row"&gt;
        &lt;div class="col-md-6"&gt;
            &lt;div class="form-group"&gt;
                &lt;label for="exampleInputEmail13"&gt;Email address &lt;sup class="color-danger"&gt;*&lt;/sup&gt;&lt;/label&gt;
                &lt;input type="email" class="form-control" id="exampleInputEmail13" placeholder="Enter Your Email Id" data-validation="email" &gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- /.col-md-6 --&gt;

        &lt;div class="col-md-6"&gt;
            &lt;div class="form-group"&gt;
                &lt;label for="contact13"&gt;Contact Number&lt;/label&gt;
                &lt;input type="text" class="form-control" id="contact13" placeholder="Enter Your Mobile Phone Number"&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- /.col-md-6 --&gt;
    &lt;/div&gt;

    &lt;div class="row"&gt;
        &lt;div class="col-md-6"&gt;
            &lt;div class="form-group"&gt;
                &lt;label for="exampleInputPassword13"&gt;Password &lt;sup class="color-danger"&gt;*&lt;/sup&gt;&lt;/label&gt;
                &lt;input type="password" class="form-control" id="exampleInputPassword13" name="pass" placeholder="Enter Strong Password" data-validation="length" data-validation-length="min8"&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- /.col-md-6 --&gt;

        &lt;div class="col-md-6"&gt;
            &lt;div class="form-group"&gt;
                &lt;label for="exampleInputPassword14"&gt;Confirm Password &lt;sup class="color-danger"&gt;*&lt;/sup&gt;&lt;/label&gt;
                &lt;input type="password" class="form-control" id="exampleInputPassword14" placeholder="Confirm your password" data-validation="confirmation" data-validation-confirm="exampleInputPassword13"&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- /.col-md-6 --&gt;
    &lt;/div&gt;

    &lt;div class="row"&gt;
        &lt;div class="col-md-12"&gt;
            &lt;div class="form-group checkbox"&gt;
                &lt;label&gt;
                    &lt;input type="checkbox" data-validation="required"&gt; I accept &lt;a href="#" class="color-primary"&gt;terms & conditions&lt;/a&gt;
                &lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!-- /.col-md-12 --&gt;

        &lt;div class="col-md-12"&gt;
            &lt;div class="btn-group pull-right mt-10" role="group"&gt;
                &lt;button type="reset" class="btn btn-gray btn-wide"&gt;&lt;i class="fa fa-times"&gt;&lt;/i&gt;Cancel&lt;/button&gt;
                &lt;button type="submit" class="btn bg-black btn-wide"&gt;&lt;i class="fa fa-arrow-right"&gt;&lt;/i&gt;Submit&lt;/button&gt;
            &lt;/div&gt;
            &lt;!-- /.btn-group --&gt;
        &lt;/div&gt;
        &lt;!-- /.col-md-12 --&gt;
    &lt;/div&gt;

&lt;/form&gt;

&lt;!-- ========== JAVASCRIPT ========== --&gt;
&lt;script src="js/form-validator/jquery.form-validator.min.js"&gt;&lt;/script&gt;

&lt;script&gt;
    $(function($) {
        $.validate({
            form : '#two-column',
            modules : 'security'
        });
    });
&lt;/script&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                    <div class="right-sidebar bg-white fixed-sidebar">
                        <div class="sidebar-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Useful Sidebar <i class="fa fa-times close-icon"></i></h4>
                                        <p>Code for help is added within the main page. Check for code below the example.</p>
                                        <p>You can use this sidebar to help your end-users. You can enter any HTML in this sidebar.</p>
                                        <p>This sidebar can be a 'fixed to top' or you can unpin it to scroll with main page.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <!-- /.col-md-12 -->

                                    <div class="text-center mt-20">
                                        <button type="button" class="btn btn-success btn-labeled">Purchase Now<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                    </div>
                                    <!-- /.text-center -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>
                    <!-- /.right-sidebar -->

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/form-validator/jquery.form-validator.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $.validate({
                    form : '#two-column',
                    modules : 'security'
                });
            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->

    </body>
</html>
