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
        <title>FREE LANCER</title>

        <!-- ========== COMMON STYLES ========== -->
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >

        <!-- ========== PAGE STYLES ========== -->
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/toastr/toastr.min.css" media="screen" >
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
                                <div class="col-sm-6">
                                    <h2 class="title">Ecommerce Dashboard</h2>
                                    <p class="sub-title">One stop solution for perfect Ecommerce dashboard!</p>
                                </div>
                                <!-- /.col-sm-6 -->
                                <div class="col-sm-6 right-side">
                                    <a class="btn bg-black toggle-code-handle" role="button">Toggle Code!</a>
                                </div>
                                <!-- /.col-sm-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-sm-6">
                                    <ul class="breadcrumb">
            							<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            							<li>Ecommerce Dashboard</li>
            						</ul>
                                </div>
                                <!-- /.col-sm-6 -->
                                <div class="col-sm-6 text-right hidden-xs">
                                    <a href="#"><i class="fa fa-comments"></i> Talk to us</a>
                                    <a href="#" class="pl-20"><i class="fa fa-cog"></i> Settings</a>
                                </div>
                                <!-- /.col-sm-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="#">
                                            <span class="number counter">1,789,235</span>
                                            <span class="name">Lifetime Sales</span>
                                            <span class="bg-icon"><i class="fa fa-usd"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                            <pre class="language-html"><code class="language-html">
                                                &lt;a class="dashboard-stat bg-primary" href="#"&gt;
                                                    &lt;span class="number counter"&gt;1,789,235&lt;/span&gt;
                                                    &lt;span class="name"&gt;Lifetime Sales&lt;/span&gt;
                                                    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-usd"&gt;&lt;/i&gt;&lt;/span&gt;
                                                &lt;/a&gt;
                                                &lt;!-- /.dashboard-stat --&gt;

                                                &lt;!-- ========== JS ========== --&gt;
                                                &lt;script&gt;
                                                    $(function(){
                                                        $('.counter').counterUp();
                                                    });
                                                &lt;/script&gt;
                                            </code></pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-danger" href="#">
                                            <span class="number counter">65,500</span>
                                            <span class="name">Total Orders</span>
                                            <span class="bg-icon"><i class="fa fa-shopping-cart"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                            <pre class="language-html"><code class="language-html">
                                                &lt;a class="dashboard-stat bg-danger" href="#"&gt;
                                                    &lt;span class="number counter"&gt;65,500&lt;/span&gt;
                                                    &lt;span class="name"&gt;Total Orders&lt;/span&gt;
                                                    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-shopping-cart"&gt;&lt;/i&gt;&lt;/span&gt;
                                                &lt;/a&gt;
                                                &lt;!-- /.dashboard-stat --&gt;

                                                &lt;!-- ========== JS ========== --&gt;
                                                &lt;script&gt;
                                                    $(function(){
                                                        $('.counter').counterUp();
                                                    });
                                                &lt;/script&gt;
                                            </code></pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-warning" href="#">
                                            <span class="number counter">13,500</span>
                                            <span class="name">Average Monthly Orders</span>
                                            <span class="bg-icon"><i class="fa fa-area-chart"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                            <pre class="language-html"><code class="language-html">
&lt;a class="dashboard-stat bg-warning" href="#"&gt;
    &lt;span class="number counter"&gt;13,500&lt;/span&gt;
    &lt;span class="name"&gt;Average Monthly Orders&lt;/span&gt;
    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-area-chart"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;!-- /.dashboard-stat --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function(){
        $('.counter').counterUp();
    });
&lt;/script&gt;
                                            </code></pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-success" href="#">
                                            <span class="number counter">450</span>
                                            <span class="name">Daily Orders</span>
                                            <span class="bg-icon"><i class="fa fa-thumbs-o-up"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                            <pre class="language-html"><code class="language-html">
&lt;a class="dashboard-stat bg-success" href="#"&gt;
    &lt;span class="number counter"&gt;450&lt;/span&gt;
    &lt;span class="name"&gt;Daily Orders&lt;/span&gt;
    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-thumbs-o-up"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;!-- /.dashboard-stat --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function(){
        $('.counter').counterUp();
    });
&lt;/script&gt;
                                            </code></pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                        <section class="section pt-10">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Online Revenue Chart</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">

                                                <div id="chart2" class="op-chart"></div>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;!-- ========== HTML ========== --&gt;
&lt;div id="chart2" class="op-chart"&gt;&lt;/div&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function($) {
        // chart2
        var chart2 = AmCharts.makeChart( "chart2", {
          "type": "serial",
          "theme": "light",
          "fontFamily": "Poppins",
          "dataProvider": [ {
            "revenue": "500012",
            "year": 2001
          },{
            "revenue": "623012",
            "year": 2002
          },{
            "revenue": "756895",
            "year": 2003
          },{
            "revenue": "846658",
            "year": 2004
          },{
            "revenue": "954284",
            "year": 2005
          },{
            "revenue": "1024364",
            "year": 2006
          }, {
            "revenue": "1125975",
            "year": 2007
          }, {
            "revenue": "1236364",
            "year": 2008
          }, {
            "revenue": "1352024",
            "year": 2009
          }, {
            "revenue": "1458256",
            "year": 2010
          }, {
            "revenue": "1568964",
            "year": 2011
          }, {
            "revenue": "1592035",
            "year": 2012
          }, {
            "revenue": "1794678",
            "year": 2013
          }, {
            "revenue": "1865598",
            "year": 2014
          }, {
            "revenue": "1962587",
            "year": 2015
          }, {
            "revenue": "2225468",
            "year": 2016
          }, {
            "revenue": "2557487",
            "year": 2017
          } ],
          "valueAxes": [ {
            "gridColor": "#FFFFFF",
            "gridAlpha": 0.2,
            "dashLength": 0,
            "title": "Generated Revenue, USD"
          } ],
          "gridAboveGraphs": true,
          "startDuration": 1,
          "graphs": [ {
            "balloonText": "[[category]]: <b>[[value]]</b>",
            "fillAlphas": 0.8,
            "lineAlpha": 0.2,
            "type": "column",
            "valueField": "revenue"
          } ],
          "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
          },
          "categoryField": "year",
          "categoryAxis": {
            "gridPosition": "start",
            "gridAlpha": 0,
            "tickPosition": "start",
            "tickLength": 20,
            "title": "Years"
          },
          "export": {
            "enabled": true
          }
        } );
    });
&lt;/script&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
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

                        <section class="section pt-10">
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

                                                <table class="table table-striped">
                                                	<thead>
                                                		<tr>
                                                			<th>Order #</th>
                                                			<th>Purchased On</th>
                                                            <th>Purchased Price</th>
                                                			<th>Customer</th>
                                                			<th>Username</th>
                                                            <th>Email</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>
                                                		</tr>
                                                	</thead>
                                                	<tbody>
                                                		<tr>
                                                			<td>1</td>
                                                			<td>12/02/2016</td>
                                                            <td>650.40$</td>
                                                			<td>Otto</td>
                                                			<td>@mdo</td>
                                                            <td>mark@gmail.com</td>
                                                            <td>
                                                                <span class="label label-info label-wide">Pending</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                                <button type="button" class="btn btn-danger btn-xs btn-labeled next-btn">Reject<span class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                            </td>
                                                		</tr>
                                                		<tr>
                                                			<td>2</td>
                                                			<td>22/02/2016</td>
                                                            <td>870.40$</td>
                                                			<td>Thornton</td>
                                                			<td>@fat</td>
                                                            <td>jacob@gmail.com</td>
                                                            <td>
                                                                <span class="label label-success label-wide">Delivered</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                                <button type="button" class="btn btn-danger btn-xs btn-labeled next-btn">Reject<span class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                            </td>
                                                		</tr>
                                                		<tr>
                                                			<td>3</td>
                                                			<td>15/02/2016</td>
                                                            <td>250.40$</td>
                                                			<td>the Bird</td>
                                                			<td>@twitter</td>
                                                            <td>larry@gmail.com</td>
                                                            <td>
                                                                <span class="label label-warning label-wide">On Hold</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                                <button type="button" class="btn btn-danger btn-xs btn-labeled next-btn">Reject<span class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                            </td>
                                                		</tr>
                                                        <tr>
                                                			<td>4</td>
                                                			<td>17/02/2016</td>
                                                            <td>230.40$</td>
                                                			<td>Bird</td>
                                                			<td>@twitter</td>
                                                            <td>larry@gmail.com</td>
                                                            <td>
                                                                <span class="label label-warning label-wide">On Hold</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                                <button type="button" class="btn btn-danger btn-xs btn-labeled next-btn">Reject<span class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                            </td>
                                                		</tr>
                                                        <tr>
                                                			<td>5</td>
                                                			<td>22/02/2016</td>
                                                            <td>870.40$</td>
                                                			<td>Thornton</td>
                                                			<td>@fat</td>
                                                            <td>jacob@gmail.com</td>
                                                            <td>
                                                                <span class="label label-success label-wide">Delivered</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                                <button type="button" class="btn btn-danger btn-xs btn-labeled next-btn">Reject<span class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                            </td>
                                                		</tr>
                                                        <tr>
                                                			<td>6</td>
                                                			<td>12/02/2016</td>
                                                            <td>650.40$</td>
                                                			<td>Otto</td>
                                                			<td>@mdo</td>
                                                            <td>mark@gmail.com</td>
                                                            <td>
                                                                <span class="label label-info label-wide">Pending</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                                <button type="button" class="btn btn-danger btn-xs btn-labeled next-btn">Reject<span class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                            </td>
                                                		</tr>
                                                        <tr>
                                                			<td>7</td>
                                                			<td>19/02/2016</td>
                                                            <td>290.40$</td>
                                                			<td>the Bird</td>
                                                			<td>@twitter</td>
                                                            <td>larry@gmail.com</td>
                                                            <td>
                                                                <span class="label label-danger label-wide">Not Delivered</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                                <button type="button" class="btn btn-danger btn-xs btn-labeled next-btn">Reject<span class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                            </td>
                                                		</tr>
                                                	</tbody>
                                                </table>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;table class="table table-striped"&gt;
    &lt;caption&gt;Optional table caption.&lt;/caption&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Order #&lt;/th&gt;
            &lt;th&gt;Purchased On&lt;/th&gt;
            &lt;th&gt;Purchased Price&lt;/th&gt;
            &lt;th&gt;Customer&lt;/th&gt;
            &lt;th&gt;Username&lt;/th&gt;
            &lt;th&gt;Email&lt;/th&gt;
            &lt;th&gt;Status&lt;/th&gt;
            &lt;th&gt;Actions&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;th scope="row"&gt;1&lt;/th&gt;
            &lt;td&gt;12/02/2016&lt;/td&gt;
            &lt;td&gt;650.40$&lt;/td&gt;
            &lt;td&gt;Otto&lt;/td&gt;
            &lt;td&gt;@mdo&lt;/td&gt;
            &lt;td&gt;mark@gmail.com&lt;/td&gt;
            &lt;td&gt;
                &lt;span class="label label-info label-wide"&gt;Pending&lt;/span&gt;
            &lt;/td&gt;
            &lt;td&gt;
                &lt;button type="button" class="btn btn-success btn-xs btn-labeled"&gt;Approve&lt;span class="btn-label btn-label-right"&gt;&lt;i class="fa fa-check"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/button&gt;
                &lt;button type="button" class="btn btn-danger btn-xs btn-labeled"&gt;Reject&lt;span class="btn-label btn-label-right"&gt;&lt;i class="fa fa-times"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/button&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        ...
    &lt;/tbody&gt;
&lt;/table&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
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

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // chart2
                var chart2 = AmCharts.makeChart( "chart2", {
                  "type": "serial",
                  "theme": "light",
                  "fontFamily": "Poppins",
                  "dataProvider": [ {
                    "revenue": "500012",
                    "year": 2001
                  },{
                    "revenue": "623012",
                    "year": 2002
                  },{
                    "revenue": "756895",
                    "year": 2003
                  },{
                    "revenue": "846658",
                    "year": 2004
                  },{
                    "revenue": "954284",
                    "year": 2005
                  },{
                    "revenue": "1024364",
                    "year": 2006
                  }, {
                    "revenue": "1125975",
                    "year": 2007
                  }, {
                    "revenue": "1236364",
                    "year": 2008
                  }, {
                    "revenue": "1352024",
                    "year": 2009
                  }, {
                    "revenue": "1458256",
                    "year": 2010
                  }, {
                    "revenue": "1568964",
                    "year": 2011
                  }, {
                    "revenue": "1592035",
                    "year": 2012
                  }, {
                    "revenue": "1794678",
                    "year": 2013
                  }, {
                    "revenue": "1865598",
                    "year": 2014
                  }, {
                    "revenue": "1962587",
                    "year": 2015
                  }, {
                    "revenue": "2225468",
                    "year": 2016
                  }, {
                    "revenue": "2557487",
                    "year": 2017
                  } ],
                  "valueAxes": [ {
                    "gridColor": "#FFFFFF",
                    "gridAlpha": 0.2,
                    "dashLength": 0,
                    "title": "Generated Revenue, USD"
                  } ],
                  "gridAboveGraphs": true,
                  "startDuration": 1,
                  "graphs": [ {
                    "balloonText": "[[category]]: <b>[[value]]</b>",
                    "fillAlphas": 0.8,
                    "lineAlpha": 0.2,
                    "type": "column",
                    "valueField": "revenue"
                  } ],
                  "chartCursor": {
                    "categoryBalloonEnabled": false,
                    "cursorAlpha": 0,
                    "zoomable": false
                  },
                  "categoryField": "year",
                  "categoryAxis": {
                    "gridPosition": "start",
                    "gridAlpha": 0,
                    "tickPosition": "start",
                    "tickLength": 20,
                    "title": "Years"
                  },
                  "export": {
                    "enabled": true
                  }

                } );

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
