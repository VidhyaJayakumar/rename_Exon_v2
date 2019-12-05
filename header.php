<script type="text/javascript">
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false")
</script>

<script type="text/javascript">
window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
</script>

<script type="text/javascript">
document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
</script>



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51304402-1', 'auto');
  ga('send', 'pageview');

</script>




<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P79ZLDK');</script>
<!-- End Google Tag Manager -->
 




<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch?q="+str,true);
  xmlhttp.send();
}
</script>

<section class="top-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                <div class="top-left" style="width: 100%;">
                    <ul class="top-contact-info">
                        <li><span class="flaticon-technology"></span>Phone: (+91) 81899 40000</li>    
                        <li><span class="flaticon-contact"></span><a href="mailto:mailto:info@exoncorp.com">info@exoncorp.com</a></li>     
                    </ul>   
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <div class="top-right clearfix" style="width: 100%;">
                    <h5>Stay Connected:</h5> 
                    <ul class="social-links">
                        <li><a href="http://facebook.com/exoncorp"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://twitter.com/exoncorp"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/+exoncorp"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="http://www.linkedin.com/company/exoncorp"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCbl2WL-AYnv0TCTAfKgfXjQ"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                     <div class="language-switcher">
                        <div id="polyglotLanguageSwitcher">
                            <form action="#">
                                <select id="polyglot-language-options">
                                    <option id="en" value="en" selected>English</option>
                                    <option id="fr" value="fr">French</option>
                                    <option id="de" value="de">German</option>
                                    <option id="it" value="it">Italian</option>
                                    <option id="es" value="es">Spanish</option>
                                </select>
                            </form>
                        </div>
                    </div> 
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End top bar area-->  

<!--Start mainmenu area-->
<section class="mainmenu-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mainmenu-bg clearfix">
                    <!--Start logo-->
                    <div class="logo pull-left">
                        <a href="http://exoncorp.com">
                            <img src="http://www.exoncorp.com/logo.png" alt="Awesome Logo">
                        </a>
                    </div>
                    <!--End logo-->
                    <!--Start mainmenu-->
                    <nav class="main-menu pull-left">
                        <div class="navbar-header">   	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="<?php echo ($_SERVER['PHP_SELF'] == "/index.php" ? "current" : "");?>"><a href="http://exoncorp.com/index.php">Home</a></li>
                                <li class="<?php echo ($_SERVER['PHP_SELF'] == "/about-us.php" ? "current" : "");?>"><a href="http://exoncorp.com/about-us.php">ABOUT US</a>
                                </li>
                                 <li class="<?php echo ($_SERVER['PHP_SELF'] == "/industries.php" ? "current" : "");?>"><a href="http://exoncorp.com/industries.php">Industries</a>
                                   
                                </li>

                                <li class="dropdown <?php echo ($_SERVER['PHP_SELF'] == "/services.php" ? "current" : "");?>"><a href="http://exoncorp.com/services.php">Services</a>
                                    <ul>
                                        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/academy.php" ? "current" : "");?>"><a href="http://exoncorp.com/academy.php">Training</a></li>
                                        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/systems.php" ? "current" : "");?>"><a href="http://exoncorp.com/systems.php">Support Services</a></li>
                                        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/consultancy.php" ? "current" : "");?>"><a href="http://exoncorp.com/consultancy.php">Consultancy</a></li>
                                        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/digital-marketing.php" ? "current" : "");?>"><a href="http://exoncorp.com/digital-marketing.php">Digital Marketing</a></li>
                                        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/law-firm.php" ? "current" : "");?>"><a href="http://exoncorp.com/law-firm.php">Law Firm</a></li>
                               
                                        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/studios.php" ? "current" : "");?>"><a href="http://exoncorp.com/studios.php">Web Development</a></li>
                                        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/cloud.php" ? "current" : "");?>"><a href="http://exoncorp.com/cloud.php">Cloud Services</a></li>
                                        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/softwares.php" ? "current" : "");?>"><a href="http://exoncorp.com/softwares.php">Software Development</a></li>
                                        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/council.php" ? "current" : "");?>"><a href="http://exoncorp.com/council.php">Security Services</a></li>
                                        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/Internship-In-Vellore.php" ? "current" : "");?>"><a href="http://exoncorp.com/Internship-In-Vellore.php">Internships</a></li>
                                        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/projects.php" ? "current" : "");?>"><a href="http://exoncorp.com/projects.php">Projects</a></li>
                                        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/coworking-space.php" ? "current" : "");?>"><a href="http://exoncorp.com/coworking-space.php">Coworking space</a></li>
                                        
                                    </ul>
                                </li>
                                 
                                <li class="<?php echo ($_SERVER['PHP_SELF'] == "/partners.php" ? "current" : "");?>"><a href="http://exoncorp.com/partners.php">Partners</a>
								
								</li>
                               
                               
                                 
                                
                              
                                   
                              
                                 
                                 <li class="<?php echo ($_SERVER['PHP_SELF'] == "/blog.php" ? "current" : "");?>"><a href="http://exoncorp.com/blog.php">Blog</a></li>
                                
                                
                                <li class="<?php echo ($_SERVER['PHP_SELF'] == "/company.php" ? "current" : "");?>"><a href="http://exoncorp.com/company.php">Company</a>                               
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!--End mainmenu-->
                    <!--Start mainmenu right box-->
                    <div class="mainmenu-right-box pull-right clearfix">
                        <div class="outer-search-box">
                            <div class="seach-toggle"><i class="fa fa-search"></i></div>
                            <ul class="search-box">
                                <li>
                                    <form action="#">
                                        <div class="form-group">
                                            <input type="search" placeholder="Search Here" onkeyup="showResult(this.value)" required="">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                        <div id="livesearch"></div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="quote-button">
                             <a href="http://exoncorp.com/contact.php">Contact Us</a>
                        </div>
                    </div> 
                    <!--End mainmenu right box-->
                </div>
            </div>   
        </div>
    </div>
</section>