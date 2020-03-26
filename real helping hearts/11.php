<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="3.css">
  <script src="1.js"></script>
  <script src="2.css"></script>
<style>
body
{
background-image:url(bg13.jpg);
}
#t
{
width:100%;
height:100%;
top:40px;
}

</style>

</head>

<body>

<div class="container">
  <h2>Contact us</h2>
  <br><br><div id="t">
  <form>
    <div class="form-group" style="top:100px;">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" name="f_name" style="width:50%;">
	</div>
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="password" class="form-control" name="email" id="pwd" style="width:50%;">
    </div>
<div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" id="comment" style="width:50%;" name="comment" placeholder="write something..."></textarea>
    </div>
<button type="submit" class="btn btn-success" name="b1">Submit</button>

  </form>
  </div>
</div>

</body>
<?php
if(isset ($_REQUEST['b1']))
{

$n=$_REQUEST['f_name'];
$e=$_REQUEST['email'];
$pt=$_REQUEST['comment'];
$con=mysqli_connect('localhost','root','','hhearts');
$q="insert into feedback values(NULL,'$n','$e','$pt')";
$rs=mysqli_query($con,$q);
if($rs)
{
echo "<script>
alert('succesfully submitted');
</script>";
}
else
{
echo"error";
}
}

?>
</html>
