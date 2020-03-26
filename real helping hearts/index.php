<!DOCTYPE html>
<html lang="en-US">
<head>
<title>SmartMenus jQuery Website Menu - jQuery Plugin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>WOWSlider</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="WOWSlider" />
	<meta name="description" content="WOWSlider" />
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
	<script type="text/javascript" src="jq.js"></script>
	<!-- End WOWSlider.com HEAD section -->

<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="src/jquery.smartmenus.js"></script>

<!-- SmartMenus jQuery init -->
<script type="text/javascript">
	$(function() {
		$('#main-menu').smartmenus({
			subMenusSubOffsetX: 1,
			subMenusSubOffsetY: -8
		});
	});
</script>
<link href="src/css/sm-core-css.css" rel="stylesheet" type="text/css" />

<!-- "sm-blue" menu theme (optional, you can use your own CSS, too) -->
<link href="src/css/sm-blue/sm-blue.css" rel="stylesheet" type="text/css" />

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="html5shiv.min.js"></script>
  <script src="respond.min.js"></script>
<![endif]-->




<!-- YOU DO NOT NEED THIS - demo page content styles -->
<link href="src/libs/demo-assets/demo.css" rel="stylesheet" type="text/css" />




</head>

<body>
<style>
#text1
{
height:200px;
width:200px;
position:absolute;
top:620px;
left:100px;
font-variant:normal;
font-style:italic;
}
#text2
{
height:20%;
width:80%;
position:absolute;
top:720px;
color:#663300;
left:100px;
font-variant:normal;
font-style:italic;
}</style>


<nav id="main-nav"  role="navigation" style="position:fixed;top:0px;background-color:white;;width:100%;left:0px;">
  <!-- Sample menu definition -->
  <ul id="main-menu" class="sm sm-blue">
    <li><a href="index.php">Home</a></li>
    <li><a href="">About</a>
      <ul>
        <li><a href="11.php">Feedback</a></li>
        <li><a href="5.php.html">FAQ's</a></li>
                </li>
      </ul>
    </li>
    <li><a href="donation11.php">Donation</a></li>
    <li><a href="#">Events</a>
      <ul>
        <li><a href="5.php.html">Past</a></li>
        <li><a href="5.php.html">Present</a></li>
		<li><a href="5.php.html">Future</a></li>
      </ul>
    </li>
    <li><a href="volunteer.php">Volunteer form</a></li>
    <li><a href="halloffame.php">Hall of Fame</a>
      
    </li>
    <li><a href="standard.php.html">Gallery</a>
          </li>
	<li><a href="membership.php">Membership</a>
	</li>
  
  <li><a href="demo/demo.php">CO-Partners</a>
	</li></ul>
</nav>
<img src="images/Logo.png" style="width:200px;height:100px;background-color:#000000;position:fixed;top:0px;left:1100px;">

<br><br>










	<!-- Start WOWSlider.com BODY section -->
	<div id="wowslider-container">
	<div class="ws_images" ><ul>
	<li><a href="#"><img src="images/slide2new.jpg" alt="" title="" id="wows_0"/></a></li>
	<li><a href="http://www.wowslider.com/demo.html"><img src="images/slide3new.jpg" alt="You can add description to slides!" title="" id="wows_1"/></a></li>
	
	</ul></div>
	<div class="ws_bullets" style="height:200px;width:100%"><div>
	<a href="#" title=""><img src="tooltips/slide1new.jpg" alt=""/>1</a>
	<a href="#" title="You can add description to slides!"><img src="tooltips/slide2new.jpg" alt=""/>2</a>
	<a href="#" title=""><img src="tooltips/slide3new.jpg" alt=""/>3</a>
	</div></div>
		<a href="#" class="ws_frame"></a>
		<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="wowslider.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<!-- End WOWSlider.com BODY section -->
	
	<div id="text1"><h1>ABOUT US</h1></div>
	<div id="text2">"There are two kinds of people in this world. Those who think,and Those who feel". In our modern and fast lifestyle after seeing soo many poor children and     people we are helpless in providing need to them. So we are acting as a bridge between the people who are willing to help and those who are in need of help. After seeing all this we are taking responsibility to help the poor people.If any natural calamities occurs then we are capable of providing them primary help in terms of medicine,clothes,etc.
	  </div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</body>
</html>

<!-- =============================================================================== -->
<!-- ================= YOU DO NOT NEED ANYTHING AFTER THIS COMMENT ================= -->
<!-- =============================================================================== -->



</body>
</html>