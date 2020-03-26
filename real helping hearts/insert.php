<html>
<body>
<?php
include("membership.php");
?>
<form method="post" enctype="multipart/form-data">
<table height=350 id="table1">
<tr>
<td>
<input type="text" class="height" call="txt" placeholder="Enter Your Full Name" name=Name>
</td></tr>
<tr>
<td>
<input type="text" class="height" call="txt" placeholder="Username" name=username>
</td></tr>
<tr>
<td>
<input type="text" class="height" call="txt" placeholder="Password" name=password>
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
<input type="text" class="height" call="txt" placeholder="Address" name=Address>
</td></tr>
<tr><td>
<input type="file" class="height" value="upload your picture" name=image>
</td></tr> 

<tr>
<td><input type="Button" class="width" value="submit" name=b1></td>
</tr>


</table>
</form>

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
$con=mysqli_connect('localhost','root','','Hhearts');
$q="insert into profile value('$n', '$u','$i')";
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
