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
<html>
<head>
    <title>DASHBOARD</title>

    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="/code_examples/tutorial.css">
        <!-- ========== COMMON STYLES ========== -->
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >

        <!-- ========== PAGE STYLES ========== -->
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="css/bootstrap-tour/bootstrap-tour.css" >

        <!-- ========== THEME CSS ========== -->
        <link rel="stylesheet" href="css/main.css" media="screen" >

        <!-- ========== MODERNIZR ========== -->
        <script src="js/modernizr/modernizr.min.js"></script>

</head>
<!-- <body>
<p>LOGGED IN</p>

<a href="logout.php">LOGOUT</a>
</body>
 -->

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
                                <div class="col-sm-6">
                                    <h2 class="title">Admin Panel</h2>
                                    <p class="sub-title">View and monitor everything</p>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-sm-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                        <li class="active">Profile</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        

                       <br><br>

                        <section class="section pt-n">
                            <?php 
                                $psql="SELECT * FROM users WHERE id = '$id' AND type = 'PARTNER'";
                                $pres = mysqli_query($mysqli,$psql);
                                $pc = mysqli_num_rows($pres);
                                while($num = mysqli_fetch_array($pres))
                                {
                                     $email = $num['email'];
                                     $name = $num['name'];
                                     $profile = $num['profile'];
                                }
                            ?>

<?php if(isset($_GET['upload']))
{
$upload = $_GET['upload'];
if($upload == 'success') 
{ 
?>
<div class="alert alert-info" role="alert">
<strong>
<?php  echo "<p class='text-success text-center'>PROFILE UPLOADED</p>"; ?>
</strong>
</div>
<?php
}
elseif($upload == 'fail') 
{ 
?>
<div class="alert alert-danger" role="alert">
<strong>
<?php  echo "<p class='text-danger text-center'>Failed Please Again! </p>"; ?>
</strong>
</div>
<?php
}
} 
?>

<?php if(isset($_GET['updated']))
{
$updated = $_GET['updated'];
if($updated == 'success') 
{ 
?>
<div class="alert alert-info" role="alert">
<strong>
<?php  echo "<p class='text-success text-center'>PROFILE UPDATED</p>"; ?>
</strong>
</div>
<?php
}
elseif($updated == 'fail') 
{ 
?>
<div class="alert alert-danger" role="alert">
<strong>
<?php  echo "<p class='text-danger text-center'>Failed Please Again! </p>"; ?>
</strong>
</div>
<?php
}
} 
?>
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <div class="panel border-primary no-border border-3-top">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <h5>Your Profile Picture <?php echo $name; ?></h5>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                <?php 
                                                if($profile == '')
                                                {


                                                ?>  
                                                    <img src="https://exoncorpprojects.com/rb.png" alt="User Avatar" class="img-responsive">
                                                    <br>
                                                <?php 
                                                } 
                                                else
                                                {
                                                ?>
                                                <img src="profile/<?php echo $profile; ?>" alt="User Avatar" class="img-responsive">
                                                <br>
                                            <?php } ?>
                                                    <div class="text-center">
                                                    <form action="profileaction.php" method="POST" enctype="multipart/form-data">
                                                        <input type="file" name="profile" id="" required="required" class="form-control">
                                                        <button type="submit" name="proupload" class="btn btn-primary btn-xs btn-labeled mt-10">Edit Picture<span class="btn-label btn-label-right"><i class="fa fa-pencil"></i></span></button>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <h5>UPDATE YOUR DETAILS</h5>
                                            </div>
                                        </div>
                                        <div class="panel-body">

                                            <form class="col-md-10 col-md-offset-1" method="post" enctype="multipart/form-data" action="profileaction.php">
                                                <div class="form-group left-icon">
                                                    <label for="name">Full Name</label>
                                                    <span class="fa fa-pencil form-left-icon"></span>
                                                    <input type="text" class="form-control" id="name" placeholder="Enter Your Full Name" name="name">
                                                </div>
                                                <div class="form-group left-icon">
                                                    <label for="email">Email address</label>
                                                    <span class="fa fa-envelope form-left-icon"></span>
                                                    <input type="email" class="form-control" id="email" placeholder="Enter Your Email Id" name="email">
                                                </div>
                                                <div class="form-group left-icon">
                                                    <label for="password">Password</label>
                                                    <span class="fa fa-key form-left-icon"></span>
                                                    <input type="password" class="form-control" id="password" placeholder="Enter Strong Password" name="password">
                                                </div>
                                                <div class="form-group left-icon">
                                                    <label for="confirmpassword">Repeat Password</label>
                                                    <span class="fa fa-key form-left-icon"></span>
                                                    <input type="password" onkeyup="checkPass(); return false;" class="form-control" id="confirmpassword" placeholder="Enter Strong Password" name="confirmpassword">
                                                </div>
                                                <script type="text/javascript">
                                                    function checkPass()
                                                    {
                                                        //Store the password field objects into variables ...
                                                        var password = document.getElementById('password');
                                                        var confirmpassword = document.getElementById('confirmpassword');
                                                        //Store the Confimation Message Object ...
                                                        var message = document.getElementById('confirmMessage');
                                                        var goodColor = "#66cc66";
                                                        var badColor = "#ff6666";
                                                        if(password.value == confirmpassword.value){
                                                            confirmpassword.style.backgroundColor = goodColor;
                                                            message.style.color = goodColor;
                                                            message.innerHTML = "Passwords Match!"
                                                        }else{
                                                            confirmpassword.style.backgroundColor = badColor;
                                                            message.style.color = badColor;
                                                            message.innerHTML = "Passwords Do Not Match!"
                                                        }
                                                    } 
                                                </script>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> I accept terms &amp; conditions
                                                    </label>
                                                </div>
                                                <button type="submit" name="details" class="btn btn-success btn-rounded btn-wide pull-right"><i class="fa fa-check"></i>Submit</button>
                                            </form>
                                        </div>
                                    </div>     
                                </div>

                        </section>
                        <!-- /.section -->
                    </div>
                    <!-- /.main-page -->

                    
                    <!-- /.right-sidebar -->

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

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
        <script src="js/prism/prism.js"></script>
        <script src="js/waypoint/waypoints.min.js"></script>
        <script src="js/counterUp/jquery.counterup.min.js"></script>
        <script src="js/amcharts/amcharts.js"></script>
        <script src="js/amcharts/serial.js"></script>
        <script src="js/amcharts/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="js/amcharts/plugins/export/export.css" type="text/css" media="all" />
        <script src="js/amcharts/themes/light.js"></script>
        <script src="js/toastr/toastr.min.js"></script>
        <script src="js/icheck/icheck.min.js"></script>
        <script src="js/bootstrap-tour/bootstrap-tour.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script src="js/production-chart.js"></script>
        <script src="js/traffic-chart.js"></script>
        <script src="js/task-list.js"></script>
        

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
 </html>