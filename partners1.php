Exon Corp Training
Exon Corp Services
Client | Partners<?php include "loginverifi.php";
include 'admin/dbaseopen.php';

$query="SELECT * from tnctsa_home where id='1'";
$result=mysql_query($query) or die('<p>Error Code : 115 <b>Pelase Report Error</b><br /><a href="/feedback/">report</a></p>');
$row = mysql_fetch_array($result);


$query2="SELECT * from tnctsa_about where id='1'";
$result2=mysql_query($query2) or die('<p>Error Code : 115 <b>Pelase Report Error</b><br /><a href="/feedback/">report</a></p>');
$row2 = mysql_fetch_array($result2);

include 'admin/dbaseclose.php';
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title><?php echo $row['title'];?></title>
  	<meta charset="utf-8">
    <meta name="description" content="<?php echo $row['metadis'];?>">
    <meta name="keywords" content="<?php echo $row['keyword'];?>">

<link rel="stylesheet" type="text/css" href="style.css"/>

    <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<link rel="stylesheet" type="text/css" href="ddsmoothmenu.css" />

<style type="text/css">
	.port-image
{
    width: 100%;
}
    
    
    
    

.filter
{
    margin-bottom:20px;
}

.each-item
{
    position:relative;
    overflow:hidden;
}

.each-item:hover .cap2, .each-item:hover .cap1
{
    left:0px;
}

.cap1
{
    position:absolute;
    width:100%;
    height:70%;
    background:rgba(255, 255, 255, 0.5);
    top:0px;
    left:-100%;
    padding:10px;
    
    transition: all .5s;
}

.cap2
{
    position:absolute;
    width:100%;
    height:30%;
    background:rgba(0, 178, 255, 0.5);
    bottom:0px;
    left:100%;
    padding:10px;
    
    transition: all .5s;
}

</style>
<script type="text/javascript" src="ddsmoothmenu.js">

</script>
<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

</head>

<body>
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
<script type="text/javascript">
	
	$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });

});
</script>
<!-- WP Content Copy Protection ™ script by Rynaldo Stoltz Ends - http://securiilock.com -->
<?php include_once("analyticstracking.php"); ?>
<?php include("header.php");?>


 
 <div align="center">


<?php include "menu.php";?>

 </div>	
 
 



		</div>




</div>

	
<div align="center"> 

<div class="container" >
<div class="redhr" ></div>


  
<div align="left">

<div class="row-2">

<div class="grid_12" style="height: auto;">

<h2>Proud to be Partnered with : </h2>

<div class="container">
    
    <div style="text-align: center;">
        <button class="btn btn-primary filter-button" data-filter="all">All</button>
        <button class="btn btn-default filter-button" data-filter="webdesign">Exon Corp Training</button>
        <button class="btn btn-default filter-button" data-filter="appicon">Exon Corp Services</button>
        <button class="btn btn-default filter-button" data-filter="iosappui">Client | Partners</button>
    </div>
    <br/>
    
    <div class="row">
       <div class="col-md-3 filter all appicon ">
      <div class="thumbnail">
        <a href="/images/p1.jpg" target="_blank">
          <img src="/images/p1.jpg" alt="Lights" style="width:100%">
        </a>
      </div>
    </div>
    <div class="col-md-3 filter  all appicon ">
      <div class="thumbnail">
        <a href="/images/p2.jpg" target="_blank">
          <img src="/images/p2.jpg" alt="Nature" style="width:100%">
          
        </a>
      </div>
    </div>
    <div class="col-md-3 filter all iosappui ">
      <div class="thumbnail">
        <a href="/images/redbackcouncil.jpg" target="_blank">
          <img src="/images/redbackcouncil.jpg" alt="Fjords" style="width:100%">
          
        </a>
      </div>
    </div>
    <div class="col-md-3 filter all webdesign ">
      <div class="thumbnail">
        <a href="/images/p3.jpg" target="_blank">
          <img src="/images/p3.jpg" alt="Fjords" style="width:100%">
          
        </a>
      </div>
    </div>



    <div class="col-md-3 filter all webdesign ">
      <div class="thumbnail">
        <a href="images/p4.jpg" target="_blank">
          <img src="images/p4.jpg" alt="Lights" style="width:100%">
        </a>
      </div>
    </div>
    <div class="col-md-3 filter all iosappui ">
      <div class="thumbnail">
        <a href="images/p5.jpg" target="_blank">
          <img src="images/p5.jpg" alt="Nature" style="width:100%">
          
        </a>
      </div>
    </div>
    <div class="col-md-3 filter all appicon ">
      <div class="thumbnail">
        <a href="images/learnage.jpg" target="_blank">
          <img src="images/learnage.jpg" alt="Fjords" style="width:100%">
          
        </a>
      </div>
    </div>
    <div class="col-md-3 filter all webdesign ">
      <div class="thumbnail">
        <a href="/images/p6.jpg" target="_blank">
          <img src="/images/p6.jpg" alt="Fjords" style="width:100%">
          
        </a>
      </div>
    </div>


    <div class="col-md-3 filter all webdesign ">
      <div class="thumbnail">
        <a href="images/p7.jpg" target="_blank">
          <img src="images/p7.jpg" alt="Lights" style="width:100%">
        </a>
      </div>
    </div>
    <div class="col-md-3 filter all iosappui">
      <div class="thumbnail">
        <a href="images/p8.jpg" target="_blank">
          <img src="images/p8.jpg" alt="Nature" style="width:100%">
          
        </a>
      </div>
    </div>
    <div class="col-md-3 filter all iosappui ">
      <div class="thumbnail">
        <a href="images/rbit.jpg" target="_blank">
          <img src="images/rbit.jpg" alt="Fjords" style="width:100%">
          
        </a>
      </div>
    </div>
    <div class="col-md-3 filter all appicon ">
      <div class="thumbnail">
        <a href="/images/exon.jpg" target="_blank">
          <img src="/images/exon.jpg" alt="Fjords" style="width:100%">
          
        </a>
      </div>
    </div>



    <div class="col-md-3 filter all webdesign ">
      <div class="thumbnail">
        <a href="images/vmware.jpg" target="_blank">
          <img src="images/vmware.jpg" alt="Lights" style="width:100%">
        </a>
      </div>
    </div>
    <div class="col-md-3 filter all webdesign ">
      <div class="thumbnail">
        <a href="images/isc2.jpg" target="_blank">
          <img src="images/isc2.jpg" alt="Nature" style="width:100%">
          
        </a>
      </div>
    </div>
    <div class="col-md-3 filter all appicon ">
      <div class="thumbnail">
        <a href="images/risc.jpg" target="_blank">
          <img src="images/risc.jpg" alt="Fjords" style="width:100%">
          
        </a>
      </div>
    </div>
    <div class="col-md-3 filter all webdesign ">
      <div class="thumbnail">
        <a href="/images/comptia.jpg" target="_blank">
          <img src="/images/comptia.jpg" alt="Fjords" style="width:100%">
          
        </a>
      </div>
    </div>
          
</div>
 <!-- <div id="w">
    <ul id="filter-list" class="clearfix">
    
    
      <li class="filter" data-filter="all">All</li>
      <li class="filter" data-filter="webdesign">Exon Corp Training</li>
      <li class="filter" data-filter="appicon">Exon Corp Services</li>
      <li class="filter" data-filter="iosappui">Client | Partners</li>
    
    </ul>
    
   <div class="container" id="portfolio">
  <div class="row">
    <div class="col-md-3 item all webdesign">
      <div class="thumbnail">
        <a href="/images/p1.jpg" target="_blank">
          <img src="/images/p1.jpg" alt="Lights" style="width:100%">
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="/images/p2.jpg" target="_blank">
          <img src="/images/p2.jpg" alt="Nature" style="width:100%">
          
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="/images/redbackcouncil.jpg" target="_blank">
          <img src="/images/redbackcouncil.jpg" alt="Fjords" style="width:100%">
          
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="/images/p3.jpg" target="_blank">
          <img src="/images/p3.jpg" alt="Fjords" style="width:100%">
          
        </a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="images/p4.jpg" target="_blank">
          <img src="images/p4.jpg" alt="Lights" style="width:100%">
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="images/p5.jpg" target="_blank">
          <img src="images/p5.jpg" alt="Nature" style="width:100%">
          
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="images/learnage.jpg" target="_blank">
          <img src="images/learnage.jpg" alt="Fjords" style="width:100%">
          
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="/images/p6.jpg" target="_blank">
          <img src="/images/p6.jpg" alt="Fjords" style="width:100%">
          
        </a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="images/p7.jpg" target="_blank">
          <img src="images/p7.jpg" alt="Lights" style="width:100%">
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="images/p8.jpg" target="_blank">
          <img src="images/p8.jpg" alt="Nature" style="width:100%">
          
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="images/rbit.jpg" target="_blank">
          <img src="images/rbit.jpg" alt="Fjords" style="width:100%">
          
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="/images/exon.jpg" target="_blank">
          <img src="/images/exon.jpg" alt="Fjords" style="width:100%">
          
        </a>
      </div>
    </div>
  </div>

   <div class="row">
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="images/vmware.jpg" target="_blank">
          <img src="images/vmware.jpg" alt="Lights" style="width:100%">
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="images/isc2.jpg" target="_blank">
          <img src="images/isc2.jpg" alt="Nature" style="width:100%">
          
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="images/risc.jpg" target="_blank">
          <img src="images/risc.jpg" alt="Fjords" style="width:100%">
          
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="/images/comptia.jpg" target="_blank">
          <img src="/images/comptia.jpg" alt="Fjords" style="width:100%">
          
        </a>
      </div>
    </div>
  </div>
</div>

  

  
    
    </div> -->
    
    <script type="text/javascript">
$(function(){
  $('#portfolio').mixitup({
    targetSelector: '.item',
    transitionSpeed: 450
  });
});
</script>




</div>

<br/>
<br/>

<div class='clear'></div>
</div>



</div>


<div class="clear"></div>


</div>
<?php include "footer.php";?>


</div>

  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="js/mixitup.min.js"></script>
</body>

</html>
