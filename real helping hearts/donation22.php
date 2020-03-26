
<html>
<body>
<?php
session_start();
if(!isset($_SESSION['u']))
{
 echo "<script> window.location='index.php'  </script> ";
}
?>

<?php
Session_Start();
$u=$_SESSION['u'];
$con=mysqli_connect('localhost','root','','hhearts');
$q="Select * from membership where username='$u'";
$rs=mysqli_query($con,$q);
if($row=mysqli_fetch_array($rs))
{
$n=$row['Name'];
$a=$row['Address'];
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
	<title>donation22</title>
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
	<li><a href="index.php" style="width:200px;text-align:center">Sign out</a></li>
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
  <button class="tablinks" onClick="openCity(event, 'Last Login')" style="top:800px;">Last Login</button>
  <button class="tablinks" onClick="openCity(event, 'Current login')" style="top:800px;">Current login</button>
</div>

<div id="Edit Profile" class="tabcontent" style="top:800px;">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Last Login" class="tabcontent" style="top:800px;">
  <h3>Paris</h3>
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
	<!DOCTYPE html>
<head>
  <link href='http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
  <link href='http://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
  <script src='http://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>
</head>
<body>
  <div class='container' style="margin:0px;">
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading' style="margin:0px;">
        <h5>DONATION FORM</h5>
      </div>
      <div class='panel-body'>
        <form class='form-horizontal' role='form'>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>MEANS OF DONATION</label>
            <div class='col-md-2'>
              <select class='form-control' id='id_accomodation'>
                <option>Online</option>
                <option>Offline</option>
                <option>Banking</option>
              </select>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Name</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <select class='form-control' id='id_title' nmae="title">
                    <option>Mr</option>
                    <option>Ms</option>
                    <option>Mrs</option>
                    <option>Miss</option>
                    <option>Dr</option>
                  </select>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_first_name' placeholder='First Name' type='text' name="name">
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_last_name' placeholder='Last Name' type='text' name="lastname">
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Contact</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_email' placeholder='E-mail' type='text' name="email">
                </div>
              </div>
              <div class='form-group internal'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_phone' placeholder='Phone: xxxxxxxxxx' type='text' name="phone">
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Donation Date</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input type="date" class='form-control datepicker' id='id_checkin' name="ddate">
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
                </div>
              </div>
              <label class='control-label col-md-2' for='id_checkout'>Pickup Date</label>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input type="date" class='form-control datepicker' id='id_checkout' name="pdate">
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Donation Category</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <select class='form-control' id='id_donation_category' name="dcategory">
                    <option>CLOTHES</option>
                    <option>MEDICINES</option>
                    <option>BLOOD</option>
                    <option>MONEY</option>
                    <option>TOYS</option>
                    <option>OTHERS</option>
                  </select>
                </div>
              </div>
            <br>
			<br>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_service' style="right:450px;;">Payment Type</label>
            <div class='col-md-8'>
              <select class='multiselect' id='id_service' multiple='multiple' name="ptype">
                <option value='PayPal'>PayPal</option>
                <option value='Netbanking'>Netbanking</option>
                <option value='Paytm'>Paytm</option>
              </select>
            </div>
          </div><br>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'
			style="right:250px;">Additional Donation</label>
            <div class='col-md-6'>
	
              <textarea class='form-control' id='id_comments' placeholder='Additional comments' rows='3' name="add_donation">
			  </textarea>
            </div>
          </div>
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <button class='btn-lg btn-primary' type='submit' name="b1">Donate with love!!!</button>
            </div>
            <div class='col-md-3'>
              <button class='btn-lg btn-danger' style='float:right' type='submit'>Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</div>
<?php
if(isset ($_REQUEST['b1']))
{
$t=$_REQUEST['title'];
$n=$_REQUEST['name'];
$ln=$_REQUEST['lastname'];
$e=$_REQUEST['email'];
$p=$_REQUEST['phone'];
$dd=$_REQUEST['ddate'];
$pd=$_REQUEST['pdate'];
$dc=$_REQUEST['dcategory'];
$pt=$_REQUEST['ptype'];
$ad=$_REQUEST['add_donation'];
$con=mysqli_connect('localhost','root','','hhearts');
$q="insert into donation values(NULL,'$t', '$n','$ln','$e','$p','$dd','$pd','$dc','$pt','$ad')";
$rs=mysqli_query($con,$q);
if($rs)
{
echo "<script>
alert('succesfully donated');
</script>";
}
else
{
echo"error";
}
}

?>

</body>
</html>