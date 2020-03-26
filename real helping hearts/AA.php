<?php
$con=mysqli_connect('localhost','root','','hhearts');
$q="select DISTINCT phone from   donation";
$rs=mysqli_query($con,$q);
while($row=mysqli_fetch_array($rs))
{
$mob[]=$row[0];

}


for($i=0;$i<count($mob); $i++){
$m=$mob[$i];
	$q="select  COUNT(phone)  from   donation where phone='$m'";
	$q2="select  *  from   donation where phone='$m'";
	
	
	$rs=mysqli_query($con,$q);
	$rs2=mysqli_query($con,$q2);
	
	$row=mysqli_fetch_array($rs);
	$row2=mysqli_fetch_array($rs2);
	$n=$row2["title"]." ".$row2["name"]." ".$row2["lastname"];
	$c=$row[0];
  echo $n." ".$c;

}
?>