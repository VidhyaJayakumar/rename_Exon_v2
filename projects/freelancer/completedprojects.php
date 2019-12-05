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

        <!-- ========== PAGE STYLES ========== -->
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>

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
                                <img src="https://exincorpprojects.com/rb.png" alt="Options - Admin Template" class="logo">
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
                                               <!--  <img src="https://exincorpprojects.com/rb.png"  class="img-circle profile-img"> -->
                                               <?php 
                                                if($profile == '')
                                                {


                                                ?>  
                                                    <img src="https://exincorpprojects.com/rb.png" alt="User Avatar" class="img-circle profile-img">
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
                                <small class="info">exincorp Projects</small>
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
                                    <h2 class="title">Ecommerce - Products</h2>
                                    <p class="sub-title">Order manage and track orders!</p>
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
            							<li>Ecommerce - Orders</li>
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
                                                    <h5>List Of Order</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20 overflow-x-auto">
                                                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Product Name</th>
                                                            <th>Category</th>
                                                            <th>Price</th>
                                                            <th>Quantity</th>
                                                            <th>Date Created</th>
                                                            <th>Status</th>
                                                            <th class="ecomm-action-icon">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>25</td>
                                                            <td>Product abc</td>
                                                            <td>Clothes</td>
                                                            <td>$320,800</td>
                                                            <td>236</td>
                                                            <td>2011/07/25</td>
                                                            <td>
                                                                <span class="label label-info label-wide">Published</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-xs btn-labeled next-btn">Edit<span class="btn-label btn-label-right"><i class="fa fa-pencil"></i></span></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>59</td>
                                                            <td>Product abc</td>
                                                            <td>Clothes</td>
                                                            <td>$420,800</td>
                                                            <td>236</td>
                                                            <td>2011/07/25</td>
                                                            <td>
                                                                <span class="label label-danger label-wide">Deleted</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-xs btn-labeled next-btn">Edit<span class="btn-label btn-label-right"><i class="fa fa-pencil"></i></span></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>68</td>
                                                            <td>Product abc</td>
                                                            <td>Clothes</td>
                                                            <td>$870,800</td>
                                                            <td>236</td>
                                                            <td>2011/07/25</td>
                                                            <td>
                                                                <span class="label label-warning label-wide">Not Published</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-xs btn-labeled next-btn">Edit<span class="btn-label btn-label-right"><i class="fa fa-pencil"></i></span></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>89</td>
                                                            <td>Product abc</td>
                                                            <td>Clothes</td>
                                                            <td>$985,800</td>
                                                            <td>236</td>
                                                            <td>2011/07/25</td>
                                                            <td>
                                                                <span class="label label-warning label-wide">Not Published</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-xs btn-labeled next-btn">Edit<span class="btn-label btn-label-right"><i class="fa fa-pencil"></i></span></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>78</td>
                                                            <td>Product abc</td>
                                                            <td>Clothes</td>
                                                            <td>$965,800</td>
                                                            <td>236</td>
                                                            <td>2011/07/25</td>
                                                            <td>
                                                                <span class="label label-danger label-wide">Deleted</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-xs btn-labeled next-btn">Edit<span class="btn-label btn-label-right"><i class="fa fa-pencil"></i></span></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>87</td>
                                                            <td>Product abc</td>
                                                            <td>Clothes</td>
                                                            <td>$598,800</td>
                                                            <td>236</td>
                                                            <td>2011/07/25</td>
                                                            <td>
                                                                <span class="label label-info label-wide">Published</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-xs btn-labeled next-btn">Edit<span class="btn-label btn-label-right"><i class="fa fa-pencil"></i></span></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>24</td>
                                                            <td>Product abc</td>
                                                            <td>Clothes</td>
                                                            <td>$264,800</td>
                                                            <td>236</td>
                                                            <td>2011/07/25</td>
                                                            <td>
                                                                <span class="label label-info label-wide">Published</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-xs btn-labeled next-btn">Edit<span class="btn-label btn-label-right"><i class="fa fa-pencil"></i></span></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>27</td>
                                                            <td>Product abc</td>
                                                            <td>Clothes</td>
                                                            <td>$364,800</td>
                                                            <td>236</td>
                                                            <td>2011/07/25</td>
                                                            <td>
                                                                <span class="label label-info label-wide">Published</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-xs btn-labeled next-btn">Edit<span class="btn-label btn-label-right"><i class="fa fa-pencil"></i></span></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>30</td>
                                                            <td>Product abc</td>
                                                            <td>Clothes</td>
                                                            <td>$485,800</td>
                                                            <td>236</td>
                                                            <td>2011/07/25</td>
                                                            <td>
                                                                <span class="label label-info label-wide">Published</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-xs btn-labeled next-btn">Edit<span class="btn-label btn-label-right"><i class="fa fa-pencil"></i></span></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>32</td>
                                                            <td>Product abc</td>
                                                            <td>Clothes</td>
                                                            <td>$951,800</td>
                                                            <td>236</td>
                                                            <td>2011/07/25</td>
                                                            <td>
                                                                <span class="label label-info label-wide">Published</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-xs btn-labeled next-btn">Edit<span class="btn-label btn-label-right"><i class="fa fa-pencil"></i></span></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>35</td>
                                                            <td>Product abc</td>
                                                            <td>Clothes</td>
                                                            <td>$324,800</td>
                                                            <td>236</td>
                                                            <td>2011/07/25</td>
                                                            <td>
                                                                <span class="label label-info label-wide">Published</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-xs btn-labeled next-btn">Edit<span class="btn-label btn-label-right"><i class="fa fa-pencil"></i></span></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Product Name</th>
                                                            <th>Category</th>
                                                            <th>Price</th>
                                                            <th>Quantity</th>
                                                            <th>Date Created</th>
                                                            <th>Status</th>
                                                            <th class="ecomm-action-icon">Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html">                                                        <code class="language-html">
&lt;table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%"&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;ID&lt;/th&gt;
            &lt;th&gt;Product Name&lt;/th&gt;
            &lt;th&gt;Category&lt;/th&gt;
            &lt;th&gt;Price&lt;/th&gt;
            &lt;th&gt;Quantity&lt;/th&gt;
            &lt;th&gt;Date Created&lt;/th&gt;
            &lt;th&gt;Status&lt;/th&gt;
            &lt;th class="ecomm-action-icon"&gt;Action&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;25&lt;/td&gt;
            &lt;td&gt;Product abc&lt;/td&gt;
            &lt;td&gt;Clothes&lt;/td&gt;
            &lt;td&gt;$320,800&lt;/td&gt;
            &lt;td&gt;236&lt;/td&gt;
            &lt;td&gt;2011/07/25&lt;/td&gt;
            &lt;td&gt;
                &lt;span class="label label-info label-wide"&gt;Published&lt;/span&gt;
            &lt;/td&gt;
            &lt;td&gt;
                &lt;button type="button" class="btn btn-info btn-xs btn-labeled next-btn"&gt;Edit&lt;span class="btn-label btn-label-right"&gt;&lt;i class="fa fa-pencil"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/button&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        ...
    &lt;/tbody&gt;
    &lt;tfoot&gt;
        &lt;tr&gt;
            &lt;th&gt;ID&lt;/th&gt;
            &lt;th&gt;Product Name&lt;/th&gt;
            &lt;th&gt;Category&lt;/th&gt;
            &lt;th&gt;Price&lt;/th&gt;
            &lt;th&gt;Quantity&lt;/th&gt;
            &lt;th&gt;Date Created&lt;/th&gt;
            &lt;th&gt;Status&lt;/th&gt;
            &lt;th class="ecomm-action-icon"&gt;Action&lt;/th&gt;
        &lt;/tr&gt;
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
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->
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
        <script src="js/DataTables/datatables.min.js"></script>
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
