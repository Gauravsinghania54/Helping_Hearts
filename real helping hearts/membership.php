<?php
session_start();
?>
<html>
<body>
<style>
body
{
background-image: url("bg.png");
}
#content
{
width:100%;
height:400px;
}
#l
{
width:60%;
height:600px;
float:left;
color:black;
font-size:15px;
}
#table1
{
font-size:22px;
margin-top:10px;
margin-left:20px;
}
#r
{
width:40%;
height:600px;
float:right;

}
.height
{
width:300px;
height:30px
}
.width
{
width:100px;
height:30px;
}

#header
{
width:100%;
height:150px;
}
#left
{
width:60%;
height:150px;
left:100px;
float:left;
color:white;
font-size:30px;
}
#right
{
width:40%;
height:150px;
float:right;

}
#table
{
margin-left:70px;
margin-top:10px;
height:5px;
}
#demo
{
width:90px;
height:400px;
}
.txt
{
width:90%;
height:70px;
font-size:20px;
padding-left:5%;
}
#i
{    position:absolute;
   	width:220px;
	height:150px;
	background-image:url(Logo.png);

margin:auto;
}


</style>
<div id="header">
<p id="i"></p>
<div id="left">
</div>
<form method="post" >
<div id="right">
<table width=70%>
<tr>
<td id="table"><h1>Email id</h1></td>
<td id="table"><h1>Password</h1>
</tr>
<tr><td><input type="text" name="tu"></td>
<td><input type="password" name="tp"></td>
<td><input type="submit" value="sign in" name="b2"></td
></tr>
<tr>
<td><input type="checkbox" id="m">Forgot password?</td>

</tr>
</table>

</div>
</form>
<?php
if(isset($_REQUEST['b2']))
{
$u=$_REQUEST['tu'];
$p=$_REQUEST['tp'];
$con=mysqli_connect('localhost','root','','hhearts');
$q="Select * from membership where username='$u' and password='$p'";
$rs=mysqli_query($con,$q);
if($row=mysqli_fetch_array($rs))
{
$_SESSION['u']=$u;
echo  $q2="select * from log where uname='$u'";
 $rs2=mysqli_query($con,$q2);
 while($row=mysqli_fetch_array($rs2))
 {
 $d=$row['datetime'];
 }
  
$_SESSION['lastlogin'] =$d;

$d=date('d-m-y h:i:s');
 $q2="insert into log values(NULL,'$u','$d')";
$rs=mysqli_query($con,$q2);
echo" <script>
alert('WELCOME USER');
window.location='profile.php';
</script>";
}
else
{
echo " <script>alert('error')</script>";
}
}
?>

</div>
<div id="content">
<div id="l">
<h2>&nbsp;</h2>

</div>
<div id="r">
<script>

function show()
{
var name=document.getElementById("name").value;
   if(name.length<3)
   {
   	alert("enter Name must be 3 char long");
	return false;
   }
   var x = document.getElementById("username").value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }

var pass=document.getElementById("password").value;
if(pass.length==0)
{
alert("please enter password");
return false;
}
if((pass.length<4) || (pass.length>15))
{
alert("password should between 4 to 15");
return false;
}
 var add = document.getElementById("Address").value;
if(add.length==0)
{
alert("please enter your address");
return false;
}

   
}
</script>

<h1 id="table1">Create a Membership</h1>

<form method="post" onSubmit="return show()" enctype="multipart/form-data">
<table height=350 id="table1">
<tr>
<td>
<input type="text" class="height" id="name" call="txt" placeholder="Enter Your Full Name" name="Name">
</td></tr>
<tr>
<td>
<input type="text" class="height" call="txt" id="username" placeholder="Username" name="username">
</td></tr>
<tr>
<td>
<input type="text" class="height" call="txt" placeholder="Password" name="password" id="password">
</td></tr>
<!--
<tr>
<td>
<select class="width">
<option>DD</option>
</select>
<select class="width">
<option>MM</option>
</select>
<select class="width"s>
<option>YY</option>
</select>


</td></tr>
-->
<tr>
<td>
<input type="text" class="height" call="txt" id="Address" placeholder="Address" name="Address">
</td></tr>
<tr><td>
<input type="file" class="height" value="upload your picture" id="image" name="image">
</td></tr> 

<tr>
<td><input type="submit" class="width" value="submit" name="b1"></td>
</tr>


</table>
</form>

</div>
</div>
<?php
if(isset ($_REQUEST['b1']))
{
$n=$_REQUEST['Name'];
$u=$_REQUEST['username'];
$p=$_REQUEST['password'];
$a=$_REQUEST['Address'];
$i=$_FILES['image']['name'];
$t=$_FILES['image']['tmp_name'];
if(move_uploaded_file($t,$i));
{
$con=mysqli_connect('localhost','root','','hhearts');
$q="insert into membership values('$u', '$p','$a','$i','$n')";
$rs=mysqli_query($con,$q);
if($rs)
{
echo"successfully inserted";
}
else
{
echo"error";
}
}
}
?>
</body>
</html>