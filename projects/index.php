<?php //include("dbconnect.php");
	//$sql = "SELECT * FROM seo WHERE s_domain = 'exoncorpprojects.com'";
	//$res = mysqli_query($conn,$sql);
	//$row = mysqli_fetch_assoc($res);	
 ?>
<!DOCTYPE html>
<html lang="en">



<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Exoncorp index page<?php echo $row['s_title']; ?> - <?php echo $row['s_domain']; ?></title>
	<meta name="author" content="<?php echo $row['s_author']; ?>">
	<meta name="description" content="<?php echo $row['s_description']; ?>">
	<meta name="keywords" content="<?php echo $row['s_keyword']; ?>">

	<!-- ========== COMMON STYLES ========== -->
	<link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
	<link rel="stylesheet" href="css/ionicons.min.css" media="screen">
    <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen">

	<!-- ========== PAGE STYLES ========== -->

	<!-- ========== THEME CSS ========== -->
	<link rel="stylesheet" href="css/main.css" media="screen">

	<!-- ========== MODERNIZR ========== -->
	<script src="js/modernizr/modernizr.min.js"></script>
	<?php// echo $row['s_googleanalytics']; ?>
	
	<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?52elbsA9lAUyUWXIQ4m21CFPsOd1A2Hk";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->


<script id="_webengage_script_tag" type="text/javascript">
var webengage; !function(w,e,b,n,g){function o(e,t){e[t[t.length-1]]=function(){r.__queue.push([t.join("."),arguments])}}var i,s,r=w[b],z=" ",l="init options track screen onReady".split(z),a="feedback survey notification".split(z),c="options render clear abort".split(z),p="Open Close Submit Complete View Click".split(z),u="identify login logout setAttribute".split(z);if(!r||!r.__v){for(w[b]=r={__queue:[],__v:"6.0",user:{}},i=0;i<l.length;i++)o(r,[l[i]]);for(i=0;i<a.length;i++){for(r[a[i]]={},s=0;s<c.length;s++)o(r[a[i]],[a[i],c[s]]);for(s=0;s<p.length;s++)o(r[a[i]],[a[i],"on"+p[s]])}for(i=0;i<u.length;i++)o(r.user,["user",u[i]]);setTimeout(function(){var f=e.createElement("script"),d=e.getElementById("_webengage_script_tag");f.type="text/javascript",f.async=!0,f.src=("https:"==e.location.protocol?"https://ssl.widgets.webengage.com":"http://cdn.widgets.webengage.com")+"/js/webengage-min-v-6.0.js",d.parentNode.insertBefore(f,d)})}}(window,document,"webengage");

webengage.init("d3a4ac24");
</script>
</head>

<body class="wide">

	<div class="main-wrapper">
		<div class="main-wrapper-inner">

            <?php include ("header.php");?>

            <div class="page-title-wrapper">
                <div class="page-title-wrapper-inner">
                    <div class="page-title-container">
                        <div class="inner page-title">
                            <h2 class="page-title-heading white-text">EXONCORP PROJECTS </h2>
                            <p class="lead">Exoncorp is a leading IT and Language training centre providing full-suite of trainings and placement services for freshers seeking a new career and professionals looking for career advancement.</p>
                            <h6 class="mb-0"><a href="contact.php" class="btn btn-transition btn-primary">Contact</a></h6>
                        </div>
                        <!-- /.inner page-title -->
                    </div>
                    <!-- /.page-title-container -->
                </div>
                <!-- /.page-title-wrapper-inner -->
            </div>

            <div class="cta cover-cta">
                <div class="container">
                    <div class="card">
                    	<div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-md-12 col-lg-7 mb-sm-2">
                                    <h5 class="card-title">Interested in discounts?</h5>
                            		<p class="card-text">Sign up now and get 10% discount instantly! Limited time offer.</p>
                                </div>
                                <!-- /.col-md-8 -->
                                <div class="col-md-12 col-lg-5">
                                    <form action="//exoncorpprojects.us16.list-manage.com/subscribe/post?u=f53099965e2af4f43cdb48721&amp;id=e69046331b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-inline" target="_blank" novalidate>
                                    	<label class="sr-only" for="email">Email</label>
                                    	<input type="email" class="form-control mr-2" name="EMAIL" id="mce-EMAIL" placeholder="Email Address">

                                    	<button type="submit" class="btn btn-success" id="mc-embedded-subscribe" >Subscribe</button>
                                    </form>
                                </div>
                                <!-- /.col-md-4 -->
                            </div>
                            <!-- /.row -->
                    	</div>
                    </div>
                </div>
                <!-- /.container -->
            </div>
            <!-- /.cta -->

            <section class="cards-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <div class="card card-shadow">
                                <div class="img-over-text bg-img-over-text-1">
                                    <div>
                                    	<h5 class="text-center">PROJECTS</h5>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <p class="card-text" style="text-align:justify;">Doing your final year project at exoncorp not only gives you knowledge on real time project implementation, but also helps you to equip yourselves for the corporate industry.</p>
                                    <a href="projects.php" class="btn btn-primary btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-md-4 mb-2">
                            <div class="card card-shadow">
                                <div class="img-over-text bg-img-over-text-2">
                                    <div>
                                    	<h5 class="text-center">Inplant Training & Internship</h5>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <p class="card-text" style="text-align:justify;">IPT is really important to gain knowledge of real time technologies and to get job. exoncorp Inplant Trainnig focus towards latest job oriented technologies and improve interview related aspects.</p>
                                    <a href="inplant-training.php" class="btn btn-primary btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-md-4 mb-2">
                            <div class="card card-shadow">
                                <div class="img-over-text bg-img-over-text-3">
                                    <div>
                                    	<h5 class="text-center">Research & Development</h5>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <p class="card-text" style="text-align:justify;">R&D plays a very important role in the success of a business and contributes to sustainability of business that provides a platform for creativity and innovation to flourish in an organisation.</p>
                                    <a href="research-development.php" class="btn btn-primary btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /.feature-section -->

            <div class="content-section bg-primary">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8 text-center">
                            <h4 class="mb-0">Looking For An Innovative Project?</h4>
                        </div>
                        <div class="col-md-4 text-center">
                            <h6 class="mb-0"><a href="contact.php" class="btn btn-warning">CONTACT US<i class="fa fa-chevron-right ml-5" aria-hidden="true"></i></a></h6>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>

            <section class="parallax overlay-parallax-feature bg-img-6">
                <div class="light-overlay">
                    <div class="container text-center">
	                    <div class="row justify-content-md-center mb-2">
	                        <div class="col-md-8">
	                            <h3>Features</h3>
	                            <p class="lead" style="color:black;"> All engineering student wants to have the innovative & high technology project in their final semester. SSI Educational Project Training Institution is the one stop destination for all the project needs of Engineering (B.E / B.Tech, M.E / M.Tech & Polytechnic Students). Our list of project's domain are ahead..</p>
	                        </div>
	                    </div>
	                    <!-- /.row -->

	                    <div class="row pt-4">
	                        <div class="col-md-4 one-feature">
	                            <div class="bg-primary rounded">
	                                <i class="icon ion-social-android feature-icon"></i>
	                                <h5>ANDROID</h5>
	                                <p class="light-white-text">Android Projects that can run in almost all android os versions.</p>
	                            </div>
	                        </div>
	                        <!-- /.col-md-4 -->

	                        <div class="col-md-4 one-feature">
	                            <div class="bg-primary rounded">
	                                <i class="icon ion-wrench feature-icon"></i>
	                                <h5>Mechatronics</h5>
	                                <p class="light-white-text">Projects combined with mechanical and electronics.</p>
	                            </div>
	                        </div>
	                        <!-- /.col-md-4 -->

	                        <div class="col-md-4 one-feature">
	                            <div class="bg-primary rounded">
	                                <i class="icon ion-thermometer feature-icon"></i>
	                                <h5>Thermal</h5>
	                                <p class="light-white-text">Projects that works by heat as input.</p>
	                            </div>
	                        </div>
	                        <!-- /.col-md-4 -->

	                        <div class="col-md-4 one-feature">
	                            <div class="bg-primary rounded">
	                                <i class="icon ion-ios-partlysunny feature-icon"></i>
	                                <h5>Solar & Wind</h5>
	                                <p class="light-white-text">Projects that works with the help of sunlight and air.</p>
	                            </div>
	                        </div>
	                        <!-- /.col-md-4 -->

	                        <div class="col-md-4 one-feature">
	                            <div class="bg-primary rounded">
	                                <i class="icon ion-ios-paper feature-icon"></i>
	                                <h5>Journal</h5>
	                                <p class="light-white-text">Record of events or business; private journal is usually referred to as a diary.</p>
	                            </div>
	                        </div>
	                        <!-- /.col-md-4 -->

	                        <div class="col-md-4 one-feature">
	                            <div class="bg-primary rounded">
	                                <i class="icon ion-iphone feature-icon"></i>
	                                <h5>Embedded</h5>
	                                <p class="light-white-text">System with dedicated functions within a mechanical or electrical system.</p>
	                            </div>
	                        </div>
	                        <!-- /.col-md-4 -->

	                        <div class="col-md-4 one-feature">
	                            <div class="bg-primary rounded">
	                                <i class="icon ion-location feature-icon"></i>
	                                <h5>GSM & GPS</h5>
	                                <p class="light-white-text">The device is based on a GSM/GPRS module with included GPS.</p>
	                            </div>
	                        </div>
	                        <!-- /.col-md-4 -->

	                        <div class="col-md-4 one-feature">
	                            <div class="bg-primary rounded">
	                                <i class="icon ion-images feature-icon"></i>
	                                <h5>Image Processing</h5>
	                                <p class="light-white-text">Analysis of a digitized image, especially in order to improve its quality.</p>
	                            </div>
	                        </div>
	                        <!-- /.col-md-4 -->

	                        <div class="col-md-4 one-feature">
	                            <div class="bg-primary rounded">
	                                <i class="icon ion-android-add-circle feature-icon"></i>
	                                <h5>Bio-Medical</h5>
	                                <p class="light-white-text">Relating to both biology and medicine.</p>
	                            </div>
	                        </div>
                            <div class="col-md-4 one-feature">
	                            <div class="bg-primary rounded">
	                                <i class="icon ion-android-add-circle feature-icon"></i>
	                                <h5>Full Documentation</h5>
	                                <p class="light-white-text">Relating to both biology and medicine.</p>
	                            </div>
	                        </div>
                            <div class="col-md-4 one-feature">
	                            <div class="bg-primary rounded">
	                                <i class="icon ion-android-add-circle feature-icon"></i>
	                                <h5>Viva Questions</h5>
	                                <p class="light-white-text">Relating to both biology and medicine.</p>
	                            </div>
	                        </div>
                            <div class="col-md-4 one-feature">
	                            <div class="bg-primary rounded">
	                                <i class="icon ion-android-add-circle feature-icon"></i>
	                                <h5>Full source code will be provided</h5>
	                                <p class="light-white-text">Relating to both biology and medicine.</p>
	                            </div>
	                        </div>
                            <div class="col-md-4 one-feature">
	                            <div class="bg-primary rounded">
	                                <i class="icon ion-android-add-circle feature-icon"></i>
	                                <h5>No technical Hiding</h5>
	                                <p class="light-white-text">Relating to both biology and medicine.</p>
	                            </div>
	                        </div>
                            <div class="col-md-4 one-feature">
	                            <div class="bg-primary rounded">
	                                <i class="icon ion-android-add-circle feature-icon"></i>
	                                <h5>Printing & Binding</h5>
	                                <p class="light-white-text">Relating to both biology and medicine.</p>
	                            </div>
	                        </div><div class="col-md-4 one-feature">
	                            <div class="bg-primary rounded">
	                                <i class="icon ion-android-add-circle feature-icon"></i>
	                                <h5>Courses will be conducted</h5>
	                                <p class="light-white-text">Relating to both biology and medicine.</p>
	                            </div>
	                        </div><div class="col-md-4 one-feature">
	                            <div class="bg-primary rounded">
	                                <i class="icon ion-android-add-circle feature-icon"></i>
	                                <h5>Placement Training</h5>
	                                <p class="light-white-text">Relating to both biology and medicine.</p>
	                            </div>
	                        </div><div class="col-md-4 one-feature">
	                            <div class="bg-primary rounded">
	                                <i class="icon ion-android-add-circle feature-icon"></i>
	                                <h5>Personality development</h5>
	                                <p class="light-white-text">Relating to both biology and medicine.</p>
	                            </div>
	                        </div><div class="col-md-4 one-feature">
	                            <div class="bg-primary rounded">
	                                <i class="icon ion-android-add-circle feature-icon"></i>
	                                <h5>Study material will be provided</h5>
	                                <p class="light-white-text">Relating to both biology and medicine.</p>
	                            </div>
	                        </div><div class="col-md-4 one-feature">
	                            <div class="bg-primary rounded">
	                                <i class="icon ion-android-add-circle feature-icon"></i>
	                                <h5>Technology specialisations & Certification</h5>
	                                <p class="light-white-text">Relating to both biology and medicine.</p>
	                            </div>
	                        </div>
	                        <!-- /.col-md-4 -->
	                    </div>
	                    <!-- /.row -->
	                </div>
	                <!-- /.container -->
                </div>
                <!-- /.light-overlay -->
            </section>
            <!-- /.content-section parallax bg-img-1 -->

			<div class="cta cover-cta">
                <div class="container">
                    <div class="card">
                    	<div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-md-12 col-lg-8 mb-sm-2">
                                    <h5 class="card-title">Still not convinced?</h5>
                            		<p class="card-text">Just get in touch with us and we will schedule a demo.</p>
                                </div>
                                <!-- /.col-md-8 -->
                                <div class="col-md-12 col-lg-4">
                                	<a href="contact.php" class="btn btn-success">Contact</a>
                                </div>
                                <!-- /.col-md-4 -->
                            </div>
                            <!-- /.row -->
                    	</div>
                    </div>
                </div>
                <!-- /.container -->
            </div>
            <!-- /.cta -->

            <section class="content-section">
                <div class="container">
                    <div class="row justify-content-md-center mb-4">
                        <div class="col-md-11 text-center">
                            <h3>Why exoncorp?</h3>
                            <p>exoncorp-Projects is a leading Training and Placement company in Vellore managed by IT veterans with more than a decade experience in leading MNC companies. We are known for our practical approach towards trainings that enable students to gain real-time exposure on competitive technologies. Trainings are offered by employees from MNCs to give a real corporate exposure.</p>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                    	<div class="col-sm-4">
                    		<div class="card news-card mb-10">
                    			<div class="card-block">
                    				<h5 class="card-title">Best Training Institute.</h5>
                    				<p class="card-text" style="text-align:justify;">We offer best innovative project and training environment than every other institutes around us and Knowledge is our most priority.</p>
                    				<a href="case-study-details.php" class="btn btn-primary">Read case study</a>
                    			</div>
                    		</div>
                    	</div>
                    	<div class="col-sm-4">
                    		<div class="card news-card mb-10">
                    			<div class="card-block">
                    				<h5 class="card-title">Unlimited Lab Usage</h5>
                    				<p class="card-text" style="text-align:justify;">Our training programmes are flexible and customized to make sure that every individual gains the maximum out of the training.</p>
                    				<a href="case-studies.php" class="btn btn-primary">Go somewhere</a>
                    			</div>
                    		</div>
                    	</div>
                        <div class="col-sm-4">
                    		<div class="card news-card mb-10">
                    			<div class="card-block">
                    				<h5 class="card-title">Skilled Trainers</h5>
                    				<p class="card-text" style="text-align:justify;">exoncorp facilitate students to interact more conveniently and acquire knowledge by providing flexible trainers.</p>
                    				<a href="case-study-details.php" class="btn btn-primary">Read case study</a>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /.content-section -->

            <section class="parallax bg-img-testimonial">
				<div class="dark-overlay">
	                <div class="container">
	                    <div class="row justify-content-md-center mb-4">
	                        <div class="col-md-6 text-center">
	                            <h3 class="white-text">Feedback</h3>
	                            <p class="lead light-white-text">exoncorp-Projects offers 100% practical and placement oriented training that assist students to gain industry exposure.</p>
	                        </div>
	                    </div>
	                    <!-- /.row -->

	                    <div class="owl-carousel owl-theme pt-2 pb-4 justify-content-center">
	                    	<div class="row">
	                    	    <div class="col text-center">
	                    	        <img src="images/testimonial-1.jpg" alt="John Doe Testimonial" class="testimonials-design">
	                                <h5 class="mt-10"><a href="#" class="white-text">John Doe</a></h5>
	                                <h6 class="m-10 light-white-text"><small>Android Trainee</small></h6>
	                                <p class="light-white-text">exoncorp offered quality training to me catering the industry requirements.</p>
	                            </div>
	                    	</div>
	                        <div class="row">
	                    	    <div class="col text-center">
	                    	        <img src="images/testimonial-2.jpg" class="testimonials-design" alt="John Doe Testimonial">
	                                <h5 class="mt-10"><a href="#" class="white-text">Adam Chen</a></h5>
	                                <h6 class="m-10 light-white-text"><small>Project Trainee, Thermal</small></h6>
	                                <p class="light-white-text">exoncorp offered quality training to me catering the industry requirements.</p>
	                            </div>
	                    	</div>
	                        <div class="row">
	                    	    <div class="col text-center">
	                    	        <img src="images/testimonial-3.jpg" class="testimonials-design" alt="John Doe Testimonial">
	                                <h5 class="mt-10"><a href="#" class="white-text">Alicia Taylor</a></h5>
	                                <h6 class="m-10 light-white-text"><small>Project Trainee, Embedded Systems</small></h6>
	                                <p class="light-white-text">exoncorp offered quality training to me catering the industry requirements.</p>
	                            </div>
	                    	</div>
	                        <div class="row">
	                    	    <div class="col text-center">
	                    	        <img src="images/testimonial-4.jpg" class="testimonials-design" alt="John Doe Testimonial">
	                                <h5 class="mt-10"><a href="#" class="white-text">Joseph Murphy</a></h5>
	                                <h6 class="m-10 light-white-text"><small>Student, Image Processing</small></h6>
	                                <p class="light-white-text">exoncorp offered quality training to me catering the industry requirements.</p>
	                            </div>
	                    	</div>
	                        <div class="row">
	                    	    <div class="col text-center">
	                    	        <img src="images/testimonial-5.jpg" class="testimonials-design" alt="John Doe Testimonial">
	                                <h5 class="mt-10"><a href="#" class="white-text">Alison Davis</a></h5>
	                                <h6 class="m-10 light-white-text"><small>Project Trainee, Robotics</small></h6>
	                                <p class="light-white-text">exoncorp offered quality training to me catering the industry requirements.</p>
	                            </div>
	                    	</div>
	                    </div>
	                </div>
	                <!-- /.container -->
				</div>
            </section>
            <!-- /.content-section -->

            <section class="content-section bg-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="h2 text-center">Request a call back.</h4>
                            <form action="mail.php" class="row" method="post">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter your full name..." required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="email2">Email Address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter your email id..." required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="contact">Contact Number</label>
                                        <input type="text" class="form-control" name="mobile" placeholder="Enter your contact number...">
                                    </div>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" name="message" rows="7" placeholder="Enter your message here..."></textarea>
                                    </div>
                                    <div class="text-right">
                                        <button id="button" type="submit" class="btn btn-secondary pl-4 pr-4">Send Message</button>
                                    </div>
                                </div>
                                <!-- /.col-md-6 -->
                            </form>
                        </div>
                        <!-- /.col-md-8 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /.content-section bg-primary -->

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.505559490861!2d79.1663753141183!3d12.939468890876972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bad3870ea3dbbc5%3A0x152c56c8d2417a96!2sexoncorp+IT+Solutions+Private+Limited!5e0!3m2!1sen!2sin!4v1500728231484" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- /.map-wrapper -->


            <?php include ("footer.php");?>
            <!-- /.st-footer -->
		</div>
		<!-- /.main-wrapper-inner -->
	</div>
	<!-- /.main-wrapper -->

	<!-- ========== COMMON JS FILES ========== -->
	<script src="js/jquery/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap/tether.min.js"></script>
	<script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/waypoints/jquery.waypoints.min.js"></script>
    <script src="js/counterup/jquery.counterup.min.js"></script>
	<script src="js/owl/owl.carousel.min.js"></script>

	<!-- ========== PAGE JS FILES ========== -->
	<script src="js/init-map.js"></script>

	<!-- ========== THEME JS ========== -->
	<script src="js/main.js"></script>
	<script>
		$(function() {
            $(".owl-carousel").owlCarousel({
                items: 2,
                nav: true,
                margin:50,
                navText: ['<i class="icon ion-arrow-left-b"></i>', '<i class="icon ion-arrow-right-b"></i>'],
				responsiveClass: true,
				responsive : {
				    // breakpoint from 0 up
				    0 : {
				        items: 1,
				    },
				    // breakpoint from 480 up
				    480 : {
				        items: 1,
				    },
				    // breakpoint from 768 up
				    768 : {
				        items: 1,
				    }
				}
            });

		});

	</script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9khzZ__MOwmZ3yX21x-jtUx-gkVpxhnA&amp;callback=initMap">
    </script>

	<!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->

</body>



</html>
