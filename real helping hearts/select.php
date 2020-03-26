<html>
<body>
<?php
include("membership.php");
?>
<form method="post" enctype="multipart/form-data">

<input type=submit name=b2>
</form>
<?php
if(isset ($_REQUEST['b2']))
{
$n=$_REQUEST['Name'];
$u=$_REQUEST['username'];
$a=$_REQUEST['Address'];
$i=$_FILES['image']['name'];
$t=$_FILES['image']['tmp_name'];
if(move_uploaded_file($t,$i));
{
$con=mysqli_connect('localhost','root','','hhearts');
$q="insert into membership values('$u', '$p','$a','$i','$n')";
$rs=mysqli_query($con,$q);
while($row=mysqli_fetch_array($rs))
{
echo"Name $row[name]<br>Username $row[username]<br><img src='$row[f]' width='200px' height='200px'><br>";
}
}
}
?>
</body>
</html>