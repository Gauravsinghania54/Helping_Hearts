<?php
session_start();
if(!isset($_SESSION['u']))
{
 echo "<script> window.location='index.php'  </script> ";
}
?>
<html>
<body>
<?php
$u=$_SESSION['u'];
$con=mysqli_connect('localhost','root','','hhearts');
$q="Select * from membership where username='$u'";
$rs=mysqli_query($con,$q);
if($row=mysqli_fetch_array($rs))
{
$n=$row['Name'];

$i=$row['image'];
$e=$row['username'];

}
?>

<style>
body
{
background-image: url("bg1.jpg");
}
.img-circle
{
position:absolute;
top:80px;
border-radius:50%;
height:200px;
width:200px;	
}
#t1
{
position:absolute;
top:270px;
left:40px;
//background-color:#000000;

color:#CCCCCC;}

#d1
{
background-image:url(bg9.jpg);

height:93%;
width:70%;
position:absolute;
top:50px;
background-color:#FFFFFF;
left:460px;
}

<style>
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
top:600px;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color:#FFFFFF;
}

/* Style the buttons inside the tab */
div.tab button {
top:600px;
    background-color:#FFFFFF;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color:#00FF00;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color:#CC0000;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: 600px;
}
</style>
</head>


     
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
body
{
background-image: url("bg1.jpg");
}


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
}
</style>


<nav id="main-nav"  role="navigation" style="position:fixed;top:0px;background-color:white;;width:70%;left:30%;">
  <!-- Sample menu definition -->
  <ul id="main-menu" class="sm sm-blue">
    <li><a href="profile.php" style="width:200px;text-align:center">Home</a></li>
      
    </li>
    <li><a href="basicinfo1.php" style="width:200px;text-align:center">Basic Info</a></li>
	<li><a href="donation22.php" style="width:200px;text-align:center">Donation</a></li>
	<li><a href="signout.php" style="width:200px;text-align:center">Sign out</a></li>
  </ul>
</nav>
<img class="img-circle" src="<?php echo $i ?>"></img>
<div id="t1"><h1 style="color:#000000;font-family:'Courier New', Courier, monospace"><?php echo $n ?></h1></div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="tab" style="top:800px;">
  <button class="tablinks" onClick="openCity(event, 'Edit Profile')" style="top:800px;">Edit profile</button>
  <button class="tablinks" onClick="openCity(event, 'Last Login')" style="top:800px;">Last Login:  </button>
  <button class="tablinks" onClick="openCity(event, 'Current login')" style="top:800px;">Current login</button>
</div>

<div id="Edit Profile" class="tabcontent" style="top:800px;">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Last Login" class="tabcontent" style="top:800px;">
  <h3><?php echo $_SESSION["lastlogin"]; ?></h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Current login" class="tabcontent" style="top:800px;">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

<div id="d1">
	<div id="wowslider-container"  style="height:500px;width:60%">
	<div class="ws_images" ><ul>
	<li><a href="#"><img src="images/thought3.jpg" alt="" title="" id="wows_0"/></a></li>
	<li><a href="#"><img src="images/thought2.jpg" alt="" title="" id="wows_1"/></a></li>
	
	</ul></div>
	<div class="ws_bullets"><div>
	<a href="#" title=""><img src="tooltips/slide1new.jpg" alt=""/>1</a>
	<a href="#" title="You can add description to slides!"><img src="tooltips/slide2new.jpg" alt="You can add description to slides!"/>2</a>
	<a href="#" title=""><img src="tooltips/slide3new.jpg" alt=""/>3</a>
	</div></div>
		<a href="#" class="ws_frame"></a>
		<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="wowslider.js"></script>
	<script type="text/javascript" src="script.js"></script>
</div>

</body>
</html>