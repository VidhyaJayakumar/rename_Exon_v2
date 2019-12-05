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
        <title>Options Admin - Responsive Web Application Kit</title>

        <!-- ========== COMMON STYLES ========== -->
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >

        <!-- ========== PAGE STYLES ========== -->
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/toastr/toastr.min.css" media="screen" >

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
                                        <a href="projects.php">
                                            <i class="fa fa-shopping-cart"></i> 
                                            <span>Projects</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="completedprojects.php">
                                            <i class="fa fa-shopping-cart"></i> 
                                            <span>Completed Projects</span>
                                        </a>
                                    </li>
                                </ul>

                                <ul class="side-nav color-gray">
                                    <li class="nav-header">
                                        <span class="">PAYMENTS</span>
                                    </li>
                                    <li>
                                        <a href="billing.php">
                                            <i class="fa fa-dashboard"></i> 
                                            <span>Billings</span>
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
                                    <h2 class="title">Ecommerce - Order View</h2>
                                    <p class="sub-title">Get order details!</p>
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
                                        <li>Ecommerce - Order View</li>
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
                                <div class="row mt-15">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Order #124845 <small>FEB 25, 2017 5:02:24</small></h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs border-bottom border-primary" role="tablist">
                                                    <li role="presentation" class="active"><a class="" href="#home7" aria-controls="home7" role="tab" data-toggle="tab">Details</a></li>
                                                    <li role="presentation"><a class="" href="#profile7" aria-controls="profile7" role="tab" data-toggle="tab">Invoices</a></li>
                                                    <li role="presentation"><a class="" href="#messages7" aria-controls="messages7" role="tab" data-toggle="tab">Credit Memos</a></li>
                                                    <li role="presentation"><a class="" href="#settings7" aria-controls="settings7" role="tab" data-toggle="tab">Shipments</a></li>
                                                </ul>
                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html">                                                        <code class="language-html">
&lt;ul class="nav nav-tabs border-bottom border-primary" role="tablist"&gt;
    &lt;li role="presentation" class="active"&gt;&lt;a class="" href="#home7" aria-controls="home7" role="tab" data-toggle="tab"&gt;Details&lt;/a&gt;&lt;/li&gt;
    &lt;li role="presentation"&gt;&lt;a class="" href="#profile7" aria-controls="profile7" role="tab" data-toggle="tab"&gt;Invoices&lt;/a&gt;&lt;/li&gt;
    &lt;li role="presentation"&gt;&lt;a class="" href="#messages7" aria-controls="messages7" role="tab" data-toggle="tab"&gt;Credit Memos&lt;/a&gt;&lt;/li&gt;
    &lt;li role="presentation"&gt;&lt;a class="" href="#settings7" aria-controls="settings7" role="tab" data-toggle="tab"&gt;Shipments&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
                                                        </code>
                                                    </pre>
                                                </div>

                                                <!-- Tab panes -->
                                                <div class="tab-content bg-white pt-30">
                                                    <div role="tabpanel" class="tab-pane active" id="home7">
                                                        <div class="col-md-12 p-n">
                                                            <div class="col-md-6">
                                                                <div class="panel panel-info">
                                                                    <div class="panel-heading">
                                                                        <div class="panel-title">
                                                                            <h5>Order</h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel-body overflow-x-auto">
                                                                        <div class="col-xs-12 p-n">
                                                                            <div class="col-xs-6 p-n">
                                                                                Order #:
                                                                            </div>
                                                                            <!-- /.col-md-6 -->
                                                                            <div class="col-xs-6 p-n">
                                                                                124845
                                                                            </div>
                                                                            <!-- /.col-md-6 -->
                                                                        </div>
                                                                        <!-- /.col-xs-12 -->
                                                                        <div class="col-xs-12 p-n">
                                                                            <div class="col-xs-6 p-n">
                                                                                Order Date & Time:
                                                                            </div>
                                                                            <!-- /.col-md-6 -->
                                                                            <div class="col-xs-6 p-n">
                                                                                FEB 25, 2017 5:02:24
                                                                            </div>
                                                                            <!-- /.col-md-6 -->
                                                                        </div>
                                                                        <!-- /.col-xs-12 -->
                                                                        <div class="col-xs-12 p-n">
                                                                            <div class="col-xs-6 p-n">
                                                                                Order Status:
                                                                            </div>
                                                                            <!-- /.col-md-6 -->
                                                                            <div class="col-xs-6 p-n">
                                                                                <span class="label label-info label-wide">Pending</span>
                                                                            </div>
                                                                            <!-- /.col-md-6 -->
                                                                        </div>
                                                                        <!-- /.col-xs-12 -->
                                                                        <div class="col-xs-12 p-n">
                                                                            <div class="col-xs-6 p-n">
                                                                                Grand Total:
                                                                            </div>
                                                                            <!-- /.col-md-6 -->
                                                                            <div class="col-xs-6 p-n">
                                                                                $985.68
                                                                            </div>
                                                                            <!-- /.col-md-6 -->
                                                                        </div>
                                                                        <!-- /.col-xs-12 -->
                                                                        <div class="col-xs-12 p-n">
                                                                            <div class="col-xs-6 p-n">
                                                                                Payment Information:
                                                                            </div>
                                                                            <!-- /.col-md-6 -->
                                                                            <div class="col-xs-6 p-n">
                                                                                Debit Card
                                                                            </div>
                                                                            <!-- /.col-md-6 -->
                                                                        </div>
                                                                        <!-- /.col-xs-12 -->
                                                                    </div>
                                                                    <!-- /.panel-body -->
                                                                </div>
                                                                <!-- /.panel -->

                                                                <div class="col-md-12 p-n src-code">
                                                                    <pre class="language-html">                                                                        <code class="language-html">
&lt;div class="panel panel-info"&gt;
    &lt;div class="panel-heading"&gt;
        &lt;div class="panel-title"&gt;
            &lt;h5&gt;Order&lt;/h5&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="panel-body overflow-x-auto"&gt;
        &lt;div class="col-xs-12 p-n"&gt;
            &lt;div class="col-xs-6 p-n"&gt;
                Order #:
            &lt;/div&gt;
            &lt;!-- /.col-md-6 --&gt;
            &lt;div class="col-xs-6 p-n"&gt;
                124845
            &lt;/div&gt;
            &lt;!-- /.col-md-6 --&gt;
        &lt;/div&gt;
        &lt;!-- /.col-xs-12 --&gt;
        &lt;div class="col-xs-12 p-n"&gt;
            &lt;div class="col-xs-6 p-n"&gt;
                Order Date & Time:
            &lt;/div&gt;
            &lt;!-- /.col-md-6 --&gt;
            &lt;div class="col-xs-6 p-n"&gt;
                FEB 25, 2017 5:02:24
            &lt;/div&gt;
            &lt;!-- /.col-md-6 --&gt;
        &lt;/div&gt;
        &lt;!-- /.col-xs-12 --&gt;
        &lt;div class="col-xs-12 p-n"&gt;
            &lt;div class="col-xs-6 p-n"&gt;
                Order Status:
            &lt;/div&gt;
            &lt;!-- /.col-md-6 --&gt;
            &lt;div class="col-xs-6 p-n"&gt;
                &lt;span class="label label-info label-wide"&gt;Pending&lt;/span&gt;
            &lt;/div&gt;
            &lt;!-- /.col-md-6 --&gt;
        &lt;/div&gt;
        &lt;!-- /.col-xs-12 --&gt;
        &lt;div class="col-xs-12 p-n"&gt;
            &lt;div class="col-xs-6 p-n"&gt;
                Grand Total:
            &lt;/div&gt;
            &lt;!-- /.col-md-6 --&gt;
            &lt;div class="col-xs-6 p-n"&gt;
                $985.68
            &lt;/div&gt;
            &lt;!-- /.col-md-6 --&gt;
        &lt;/div&gt;
        &lt;!-- /.col-xs-12 --&gt;
        &lt;div class="col-xs-12 p-n"&gt;
            &lt;div class="col-xs-6 p-n"&gt;
                Payment Information:
            &lt;/div&gt;
            &lt;!-- /.col-md-6 --&gt;
            &lt;div class="col-xs-6 p-n"&gt;
                Debit Card
            &lt;/div&gt;
            &lt;!-- /.col-md-6 --&gt;
        &lt;/div&gt;
        &lt;!-- /.col-xs-12 --&gt;
    &lt;/div&gt;
    &lt;!-- /.panel-body --&gt;
&lt;/div&gt;
&lt;!-- /.panel --&gt;
                                                                        </code>
                                                                    </pre>
                                                                </div>
                                                            </div>
                                                            <!-- /.col-md-6 -->
                                                            <div class="col-md-6">
                                                                <div class="panel panel-primary">
                                                                    <div class="panel-heading">
                                                                        <div class="panel-title">
                                                                            <h5>Customer Information <small>add class 'panel-danger'</small></h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel-body overflow-x-auto">
                                                                        <div class="col-xs-12 p-n">
                                                                            <div class="col-xs-6 p-n">
                                                                                Customer Name:
                                                                            </div>
                                                                            <!-- /.col-md-6 -->
                                                                        <div class="col-xs-6 p-n">
                                                                            Cedric Kelly
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                    </div>
                                                                    <!-- /.col-xs-12 -->
                                                                    <div class="col-xs-12 p-n">
                                                                        <div class="col-xs-6 p-n">
                                                                            Email:
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                        <div class="col-xs-6 p-n">
                                                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="02616766706b612c69676e6e7b42656f636b6e2c616d6f">[email&#160;protected]</a>
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                    </div>
                                                                    <!-- /.col-xs-12 -->
                                                                    <div class="col-xs-12 p-n">
                                                                        <div class="col-xs-6 p-n">
                                                                            State:
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                        <div class="col-xs-6 p-n">
                                                                            Buffalo
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                    </div>
                                                                    <!-- /.col-xs-12 -->
                                                                    <div class="col-xs-12 p-n">
                                                                        <div class="col-xs-6 p-n">
                                                                            Phone Number:
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                        <div class="col-xs-6 p-n">
                                                                            (307) 217-18078
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                    </div>
                                                                    <!-- /.col-xs-12 -->
                                                                    <div class="col-xs-12 p-n">
                                                                        <div class="col-xs-6 p-n">
                                                                            Alternate Phone Number:
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                        <div class="col-xs-6 p-n">
                                                                            (307) 217-12345
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                        </div>
                                                                        <!-- /.col-xs-12 -->
                                                                    </div>
                                                                    <!-- /.panel-body -->
                                                                </div>
                                                            </div>
                                                            <!-- /.col-md-6 -->
                                                        </div>
                                                        <!-- /.col-md-12 -->
                                                        <div class="col-md-12 p-n">
                                                            <div class="col-md-6">
                                                                <div class="panel panel-warning">
                                                                    <div class="panel-heading">
                                                                        <div class="panel-title">
                                                                            <h5>Billing Address <small>add class 'panel-primary'</small></h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        Cedric Kelly <br>606 TW Road<br>Buffalo<br>WY 82834<br>United States<br>T: (307) 217-18078
                                                                    </div>
                                                                    <!-- /.panel-body -->
                                                                </div>
                                                            </div>
                                                            <!-- /.col-md-6 -->
                                                            <div class="col-md-6">
                                                                <div class="panel panel-danger">
                                                                    <div class="panel-heading">
                                                                        <div class="panel-title">
                                                                            <h5>Customer Information <small>add class 'panel-danger'</small></h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        Cedric Kelly<br>606 TW Road<br>Buffalo<br>WY 82834<br>United States<br>T: (307) 217-18078
                                                                    </div>
                                                                    <!-- /.panel-body -->
                                                                </div>
                                                            </div>
                                                            <!-- /.col-md-6 -->
                                                        </div>
                                                        <!-- /.col-md-12 -->

                                                        <div class="col-md-12">
                                                            <div class="panel panel-info">
                                                                <div class="panel-heading">
                                                                    <div class="panel-title">
                                                                        <h5>Shopping Cart <small>add class 'panel-primary'</small></h5>
                                                                    </div>
                                                                </div>
                                                                <div class="panel-body overflow-x-auto">
                                                                    <div class="panel-title">
                                                                        <h5>List Of Order</h5>
                                                                    </div>
                                                                    <table class="table table-striped">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Product</th>
                                                                                <th>Item Status</th>
                                                                                <th>Original Price</th>
                                                                                <th>Price</th>
                                                                                <th>Quantity</th>
                                                                                <th>Tax Amount</th>
                                                                                <th>Tax Percent</th>
                                                                                <th>Discount Amount</th>
                                                                                <th>Total</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Item-1</td>
                                                                                <td><span class="label label-info label-wide">Available</span></td>
                                                                                <td>650.40$</td>
                                                                                <td>660.50$</td>
                                                                                <td>56</td>
                                                                                <td>2$</td>
                                                                                <td>2%</td>
                                                                                <td>5$</td>
                                                                                <td>640.50$</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Item-2</td>
                                                                                <td><span class="label label-info label-wide">Available</span></td>
                                                                                <td>650.40$</td>
                                                                                <td>660.50$</td>
                                                                                <td>56</td>
                                                                                <td>2$</td>
                                                                                <td>2%</td>
                                                                                <td>5$</td>
                                                                                <td>640.50$</td>
                                                                                </tr>
                                                                            <tr>
                                                                                <td>Item-3</td>
                                                                                <td><span class="label label-danger label-wide">Not Available</span></td>
                                                                                <td>650.40$</td>
                                                                                <td>660.50$</td>
                                                                                <td>56</td>
                                                                                <td>2$</td>
                                                                                <td>2%</td>
                                                                                <td>5$</td>
                                                                                <td>640.50$</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Item-4</td>
                                                                                <td><span class="label label-warning label-wide">Waiting</span></td>
                                                                                <td>650.40$</td>
                                                                                <td>660.50$</td>
                                                                                <td>56</td>
                                                                                <td>2$</td>
                                                                                <td>2%</td>
                                                                                <td>5$</td>
                                                                                <td>640.50$</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Item-5</td>
                                                                                <td><span class="label label-danger label-wide">Not Available</span></td>
                                                                                <td>650.40$</td>
                                                                                <td>660.50$</td>
                                                                                <td>56</td>
                                                                                <td>2$</td>
                                                                                <td>2%</td>
                                                                                <td>5$</td>
                                                                                <td>640.50$</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Item-6</td>
                                                                                <td><span class="label label-warning label-wide">Waiting</span></td>
                                                                                <td>650.40$</td>
                                                                                <td>660.50$</td>
                                                                                <td>56</td>
                                                                                <td>2$</td>
                                                                                <td>2%</td>
                                                                                <td>5$</td>
                                                                                <td>640.50$</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Item-7</td>
                                                                                <td><span class="label label-danger label-wide">Not Available</span></td>
                                                                                <td>650.40$</td>
                                                                                <td>660.50$</td>
                                                                                <td>56</td>
                                                                                <td>2$</td>
                                                                                <td>2%</td>
                                                                                <td>5$</td>
                                                                                <td>640.50$</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <!-- /.panel-body -->
                                                                <div class="col-md-12 p-n mt-15 src-code">
                                                                    <pre class="language-html">                                                                        <code class="language-html">
&lt;table class="table table-striped"&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Product&lt;/th&gt;
            &lt;th&gt;Item Status&lt;/th&gt;
            &lt;th&gt;Original Price&lt;/th&gt;
            &lt;th&gt;Price&lt;/th&gt;
            &lt;th&gt;Quantity&lt;/th&gt;
            &lt;th&gt;Tax Amount&lt;/th&gt;
            &lt;th&gt;Tax Percent&lt;/th&gt;
            &lt;th&gt;Discount Amount&lt;/th&gt;
            &lt;th&gt;Total&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;Item-1&lt;/td&gt;
            &lt;td&gt;&lt;span class="label label-info label-wide"&gt;Available&lt;/span&gt;&lt;/td&gt;
            &lt;td&gt;650.40$&lt;/td&gt;
            &lt;td&gt;660.50$&lt;/td&gt;
            &lt;td&gt;56&lt;/td&gt;
            &lt;td&gt;2$&lt;/td&gt;
            &lt;td&gt;2%&lt;/td&gt;
            &lt;td&gt;5$&lt;/td&gt;
            &lt;td&gt;640.50$&lt;/td&gt;
        &lt;/tr&gt;
        ...
    &lt;/tbody&gt;
&lt;/table&gt;
                                                                        </code>
                                                                    </pre>
                                                                </div>
                                                                <!-- /.src-code -->
                                                            </div>
                                                            <!-- /.panel -->
                                                        </div>
                                                        <!-- /.col-md-12 -->

                                                        <div class="col-md-6 pull-right">
                                                            <div class="panel panel-success">
                                                                <div class="panel-heading">
                                                                    <div class="panel-title">
                                                                        <h5>Invoice <small>add class 'panel-danger'</small></h5>
                                                                    </div>
                                                                </div>
                                                                <div class="panel-body overflow-x-auto">
                                                                    <div class="col-xs-12 p-n">
                                                                        <div class="col-xs-6 p-n">
                                                                            Sub Total:
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                        <div class="col-xs-6 p-n">
                                                                            $1,123.65
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                    </div>
                                                                    <!-- /.col-xs-12 -->
                                                                    <div class="col-xs-12 p-n">
                                                                        <div class="col-xs-6 p-n">
                                                                            Shipping:
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                        <div class="col-xs-6 p-n">
                                                                            $10
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                    </div>
                                                                    <!-- /.col-xs-12 -->
                                                                    <div class="col-xs-12 p-n">
                                                                        <div class="col-xs-6 p-n">
                                                                            Grand Total:
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                        <div class="col-xs-6 p-n">
                                                                            $1,256.80
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                    </div>
                                                                    <!-- /.col-xs-12 -->
                                                                    <div class="col-xs-12 p-n">
                                                                        <div class="col-xs-6 p-n">
                                                                            Total Paid:
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                        <div class="col-xs-6 p-n">
                                                                            $1,256.80
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                    </div>
                                                                    <!-- /.col-xs-12 -->
                                                                    <div class="col-xs-12 p-n">
                                                                        <div class="col-xs-6 p-n">
                                                                            Total Refunded:
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                        <div class="col-xs-6 p-n">
                                                                            $0
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                    </div>
                                                                    <!-- /.col-xs-12 -->
                                                                    <div class="col-xs-12 p-n">
                                                                        <div class="col-xs-6 p-n">
                                                                            Total Due:
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                        <div class="col-xs-6 p-n">
                                                                            $1,123.65
                                                                        </div>
                                                                        <!-- /.col-md-6 -->
                                                                    </div>
                                                                    <!-- /.col-xs-12 -->
                                                                </div>
                                                                <!-- /.panel-body -->
                                                            </div>
                                                        </div>
                                                        <!-- /.col-md-6 -->
                                                    </div>
                                                    <!-- /.tab-pane -->

                                                    <div role="tabpanel" class="tab-pane" id="profile7">
                                                        <div class="panel-heading">
                                                            <div class="panel-title">
                                                                <h5>List Of Order</h5>
                                                            </div>
                                                        </div>
                                                        <div class="panel-body p-20 overflow-x-auto">
                                                            <table id="example" class="display table table-striped table-bordered" width="100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Invoice #</th>
                                                                        <th>Invoice Date</th>
                                                                        <th>Customer</th>
                                                                        <th>Email</th>
                                                                        <th>Amount</th>
                                                                        <th>Location</th>
                                                                        <th>Status</th>
                                                                        <th class="ecomm-action-icon">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>61</td>
                                                                        <td>2011/04/25</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="74171110061d175a1f1118180d341319151d185a171b19">[email&#160;protected]</a></td>
                                                                        <td>$320,800</td>
                                                                        <td>New York</td>
                                                                        <td>
                                                                            <span class="label label-info label-wide">Pending</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>60</td>
                                                                        <td>2011/07/25</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="46252322342f25682d232a2a3f06212b272f2a6825292b">[email&#160;protected]</a></td>
                                                                        <td>$170,750</td>
                                                                        <td>Tokyo</td>
                                                                        <td>
                                                                            <span class="label label-success label-wide">Paid</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>59</td>
                                                                        <td>2016/10/02</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="72111716001b115c19171e1e0b32151f131b1e5c111d1f">[email&#160;protected]</a></td>
                                                                        <td>$270,750</td>
                                                                        <td>Pune</td>
                                                                        <td>
                                                                            <span class="label label-danger label-wide">Cancel</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>66</td>
                                                                        <td>2016/10/02</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3f5c5a5b4d565c11545a5353467f58525e5653115c5052">[email&#160;protected]</a></td>
                                                                        <td>$86,000</td>
                                                                        <td>San Francisco</td>
                                                                        <td>
                                                                            <span class="label label-danger label-wide">Cancel</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>22</td>
                                                                        <td>2012/03/29</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="99fafcfdebf0fab7f2fcf5f5e0d9fef4f8f0f5b7faf6f4">[email&#160;protected]</a></td>
                                                                        <td>$433,060</td>
                                                                        <td>San Francisco</td>
                                                                        <td>
                                                                            <span class="label label-danger label-wide">Cancel</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>33</td>
                                                                        <td>2008/11/28</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="26454342544f45084d434a4a5f66414b474f4a0845494b">[email&#160;protected]</a></td>
                                                                        <td>$162,700</td>
                                                                        <td>Tokyo</td>
                                                                        <td>
                                                                            <span class="label label-success label-wide">Paid</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>39</td>
                                                                        <td>2012/12/02</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="53303637213a307d38363f3f2a13343e323a3f7d303c3e">[email&#160;protected]</a></td>
                                                                        <td>$372,000</td>
                                                                        <td>New York</td>
                                                                        <td>
                                                                            <span class="label label-success label-wide">Paid</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>120</td>
                                                                        <td>2012/08/06</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="781b1d1c0a111b56131d141401381f15191114561b1715">[email&#160;protected]</a></td>
                                                                        <td>$137,500</td>
                                                                        <td>San Francisco</td>
                                                                        <td>
                                                                            <span class="label label-info label-wide">Pending</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>158</td>
                                                                        <td>2015/08/06</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="96f5f3f2e4fff5b8fdf3fafaefd6f1fbf7fffab8f5f9fb">[email&#160;protected]</a></td>
                                                                        <td>$537,500</td>
                                                                        <td>NY</td>
                                                                        <td>
                                                                            <span class="label label-info label-wide">Pending</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>168</td>
                                                                        <td>2016/08/06</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="34575150465d571a5f5158584d745359555d581a575b59">[email&#160;protected]</a></td>
                                                                        <td>$337,500</td>
                                                                        <td>London</td>
                                                                        <td>
                                                                            <span class="label label-warning label-wide">On Hold</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>89</td>
                                                                        <td>2016/08/09</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="53303637213a307d38363f3f2a13343e323a3f7d303c3e">[email&#160;protected]</a></td>
                                                                        <td>$387,500</td>
                                                                        <td>NY</td>
                                                                        <td>
                                                                            <span class="label label-info label-wide">Pending</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Order #</th>
                                                                        <th>Purchased On</th>
                                                                        <th>Customer</th>
                                                                        <th>Email</th>
                                                                        <th>Purchased Price</th>
                                                                        <th>Location</th>
                                                                        <th>Status</th>
                                                                        <th class="ecomm-action-icon">Action</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>

                                                            <div class="col-md-12 mt-15 src-code">
                                                                <pre class="language-html">                                                                    <code class="language-html">
&lt;table id="example" class="display table table-striped table-bordered" width="100%"&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Invoice #&lt;/th&gt;
            &lt;th&gt;Invoice Date&lt;/th&gt;
            &lt;th&gt;Customer&lt;/th&gt;
            &lt;th&gt;Email&lt;/th&gt;
            &lt;th&gt;Amount&lt;/th&gt;
            &lt;th&gt;Location&lt;/th&gt;
            &lt;th&gt;Status&lt;/th&gt;
            &lt;th class="ecomm-action-icon"&gt;Action&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;61&lt;/td&gt;
            &lt;td&gt;2011/04/25&lt;/td&gt;
            &lt;td&gt;Cedric Kelly&lt;/td&gt;
            &lt;td&gt;<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="82e1e7e6f0ebe1ace9e7eeeefbc2e5efe3ebeeace1edef">[email&#160;protected]</a>&lt;/td&gt;
            &lt;td&gt;$320,800&lt;/td&gt;
            &lt;td&gt;New York&lt;/td&gt;
            &lt;td&gt;
                &lt;span class="label label-info label-wide"&gt;Pending&lt;/span&gt;
            &lt;/td&gt;
            &lt;td&gt;
                &lt;button type="button" class="btn btn-info btn-xs btn-labeled"&gt;Print&lt;span class="btn-label btn-label-right"&gt;&lt;i class="fa fa-print"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/button&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        ...
    &lt;/tbody&gt;
    &lt;tfoot&gt;
        &lt;tr&gt;
            &lt;th&gt;Order #&lt;/th&gt;
            &lt;th&gt;Purchased On&lt;/th&gt;
            &lt;th&gt;Customer&lt;/th&gt;
            &lt;th&gt;Email&lt;/th&gt;
            &lt;th&gt;Purchased Price&lt;/th&gt;
            &lt;th&gt;Location&lt;/th&gt;
            &lt;th&gt;Status&lt;/th&gt;
            &lt;th class="ecomm-action-icon"&gt;Action&lt;/th&gt;
        &lt;/tr&gt;
        ...
    &lt;/tfoot&gt;
&lt;/table&gt;
&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function($) {
        $('#example').DataTable();
    });
&lt;/script&gt;
                                                                    </code>
                                                                </pre>
                                                            </div>
                                                            <!-- /.col-md-12 -->
                                                        </div>
                                                        <!-- /.panel-body -->
                                                    </div>
                                                    <!-- /.tab-pane -->

                                                    <div role="tabpanel" class="tab-pane" id="messages7">
                                                        <div class="panel-heading">
                                                            <div class="panel-title">
                                                                <h5>List Of Order</h5>
                                                            </div>
                                                        </div>
                                                        <div class="panel-body p-20 overflow-x-auto">
                                                            <table id="example-memo" class="display table table-striped table-bordered" width="100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Credit Memo #</th>
                                                                        <th>Invoice Date</th>
                                                                        <th>Customer</th>
                                                                        <th>Email</th>
                                                                        <th>Amount</th>
                                                                        <th>Location</th>
                                                                        <th>Status</th>
                                                                        <th class="ecomm-action-icon">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>61</td>
                                                                        <td>2011/04/25</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4b282e2f39222865202e2727320b2c262a222765282426">[email&#160;protected]</a></td>
                                                                        <td>$320,800</td>
                                                                        <td>New York</td>
                                                                        <td>
                                                                            <span class="label label-info label-wide">Pending</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>60</td>
                                                                        <td>2011/07/25</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d0b3b5b4a2b9b3febbb5bcbca990b7bdb1b9bcfeb3bfbd">[email&#160;protected]</a></td>
                                                                        <td>$170,750</td>
                                                                        <td>Tokyo</td>
                                                                        <td>
                                                                            <span class="label label-success label-wide">Paid</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>59</td>
                                                                        <td>2016/10/02</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="46252322342f25682d232a2a3f06212b272f2a6825292b">[email&#160;protected]</a></td>
                                                                        <td>$270,750</td>
                                                                        <td>Pune</td>
                                                                        <td>
                                                                            <span class="label label-danger label-wide">Cancel</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>66</td>
                                                                        <td>2016/10/02</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c0a3a5a4b2a9a3eeaba5acacb980a7ada1a9aceea3afad">[email&#160;protected]</a></td>
                                                                        <td>$86,000</td>
                                                                        <td>San Francisco</td>
                                                                        <td>
                                                                            <span class="label label-danger label-wide">Cancel</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>22</td>
                                                                        <td>2012/03/29</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="accfc9c8dec5cf82c7c9c0c0d5eccbc1cdc5c082cfc3c1">[email&#160;protected]</a></td>
                                                                        <td>$433,060</td>
                                                                        <td>San Francisco</td>
                                                                        <td>
                                                                            <span class="label label-danger label-wide">Cancel</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>33</td>
                                                                        <td>2008/11/28</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b6d5d3d2c4dfd598ddd3dadacff6d1dbd7dfda98d5d9db">[email&#160;protected]</a></td>
                                                                        <td>$162,700</td>
                                                                        <td>Tokyo</td>
                                                                        <td>
                                                                            <span class="label label-success label-wide">Paid</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>39</td>
                                                                        <td>2012/12/02</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9cfff9f8eef5ffb2f7f9f0f0e5dcfbf1fdf5f0b2fff3f1">[email&#160;protected]</a></td>
                                                                        <td>$372,000</td>
                                                                        <td>New York</td>
                                                                        <td>
                                                                            <span class="label label-success label-wide">Paid</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>120</td>
                                                                        <td>2012/08/06</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5d3e38392f343e7336383131241d3a303c3431733e3230">[email&#160;protected]</a></td>
                                                                        <td>$137,500</td>
                                                                        <td>San Francisco</td>
                                                                        <td>
                                                                            <span class="label label-info label-wide">Pending</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>158</td>
                                                                        <td>2015/08/06</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3e5d5b5a4c575d10555b5252477e59535f5752105d5153">[email&#160;protected]</a></td>
                                                                        <td>$537,500</td>
                                                                        <td>NY</td>
                                                                        <td>
                                                                            <span class="label label-info label-wide">Pending</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>168</td>
                                                                        <td>2016/08/06</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1b787e7f69727835707e7777625b7c767a727735787476">[email&#160;protected]</a></td>
                                                                        <td>$337,500</td>
                                                                        <td>London</td>
                                                                        <td>
                                                                            <span class="label label-warning label-wide">On Hold</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>89</td>
                                                                        <td>2016/08/09</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6f0c0a0b1d060c41040a0303162f08020e060341">[email&#160;protected]</a>com</td>
                                                                        <td>$387,500</td>
                                                                        <td>NY</td>
                                                                        <td>
                                                                            <span class="label label-info label-wide">Pending</span>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info btn-xs btn-labeled">Print<span class="btn-label btn-label-right"><i class="fa fa-print"></i></span></button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Order #</th>
                                                                        <th>Purchased On</th>
                                                                        <th>Customer</th>
                                                                        <th>Email</th>
                                                                        <th>Purchased Price</th>
                                                                        <th>Location</th>
                                                                        <th>Status</th>
                                                                        <th class="ecomm-action-icon">Action</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>

                                                            <div class="col-md-12 mt-15 src-code">
                                                                <pre class="language-html"><code class="language-html">
&lt;table id="example-memo" class="display table table-striped table-bordered" width="100%"&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Credit Memo #&lt;/th&gt;
            &lt;th&gt;Invoice Date&lt;/th&gt;
            &lt;th&gt;Customer&lt;/th&gt;
            &lt;th&gt;Email&lt;/th&gt;
            &lt;th&gt;Amount&lt;/th&gt;
            &lt;th&gt;Location&lt;/th&gt;
            &lt;th&gt;Status&lt;/th&gt;
            &lt;th class="ecomm-action-icon"&gt;Action&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;61&lt;/td&gt;
            &lt;td&gt;2011/04/25&lt;/td&gt;
            &lt;td&gt;Cedric Kelly&lt;/td&gt;
            &lt;td&gt;<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d4b7b1b0a6bdb7fabfb1b8b8ad94b3b9b5bdb8fab7bbb9">[email&#160;protected]</a>&lt;/td&gt;
            &lt;td&gt;$320,800&lt;/td&gt;
            &lt;td&gt;New York&lt;/td&gt;
            &lt;td&gt;
                &lt;span class="label label-info label-wide"&gt;Pending&lt;/span&gt;
            &lt;/td&gt;
            &lt;td&gt;
                &lt;button type="button" class="btn btn-info btn-xs btn-labeled"&gt;Print&lt;span class="btn-label btn-label-right"&gt;&lt;i class="fa fa-print"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/button&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
    &lt;tfoot&gt;
        &lt;tr&gt;
            &lt;th&gt;Order #&lt;/th&gt;
            &lt;th&gt;Purchased On&lt;/th&gt;
            &lt;th&gt;Customer&lt;/th&gt;
            &lt;th&gt;Email&lt;/th&gt;
            &lt;th&gt;Purchased Price&lt;/th&gt;
            &lt;th&gt;Location&lt;/th&gt;
            &lt;th&gt;Status&lt;/th&gt;
            &lt;th class="ecomm-action-icon"&gt;Action&lt;/th&gt;
        &lt;/tr&gt;
        ...
    &lt;/tfoot&gt;
&lt;/table&gt;
&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function($) {
        $('#example-memo').DataTable();
    });
&lt;/script&gt;
                                                                </code></pre>
                                                            </div>
                                                            <!-- /.col-md-12 -->
                                                        </div>
                                                        <!-- /.panel-body -->
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="settings7">
                                                         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    </div>
                                                    <!-- /.tab-pane -->
                                                </div>
                                                <!-- /.tab-content -->
                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                        <!-- /.panel -->
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
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/DataTables/datatables.min.js"></script>
        <script src="js/waypoint/waypoints.min.js"></script>
        <script src="js/counterUp/jquery.counterup.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function($) {
                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });
                // data table
                $('#example').DataTable();
                $('#example-memo').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->

    </body>
</html>
