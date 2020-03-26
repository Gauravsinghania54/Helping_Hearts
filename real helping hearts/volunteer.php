<!DOCTYPE html>
<head>
  <link href='bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
  <link href='http://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
  <script src='http://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>
</head>
<style>
body
{
background-image:url(bg13.jpg);
}
</style>
<body>
  <div class='container'>
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h5>VOLUNTEER FORM</h5>
      </div>
      <div class='panel-body'>
        <form method="post" class='form-horizontal' role='form'>
          
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Name</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <select class='form-control' id='id_title' name="title">
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
                  <input class='form-control' id='id_first_name' placeholder='First Name' type='text' name="fname">
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_last_name' placeholder='Last Name' type='text' name="lname">
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
          </div> <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Blood Group</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_email' placeholder='Blood Group' type='text' name="bgroup">
                </div>
              </div>
			  <br>
			 <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email' style="right:210px;">Educational Qualification</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-12'>
                  <input class='form-control' id='id_email' placeholder='Educational Qualification'  type='text' name="edu_qual" >
                </div>
              </div>
			  <br>
			   <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email' style="right:350px;">Gender</label> 
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
				<div class="radio">
      <label><input type="radio"  value="male" style="right:350px;" name="gender">male</label>
        

    </div>
	<div class="radio">
      <label><input type="radio"  value="female" name="gender">female</label>
        
    </div>
	<br>
	<label class='control-label col-md-2 col-md-offset-2' for='id_email' style="right:350px;">DOB</label> 
    	<input type="date"  min="2000-12-12" name="dob">
		<br>
		<br>
		<br>
	              </div>
			  <br>
			  
               <div class='form-group'>
            <table width="40%" cellpadding="30">
			<tr>
			<td>
			<div class='col-md-offset-4 col-md-2'>
              <button class='btn-lg btn-primary' type='submit' name="b1">Submit!!!</button>
            </div>
			</td>
			<td>
			
            <div class='col-md-2'>
              <button class='btn-lg btn-danger'  type='submit'>Cancel</button>
            </div>
			</td>
			</tr>
			</table>
			
          
		  </div>
		  
        </form>
      </div>
    </div>
  </div></div>
   <?php
if(isset ($_REQUEST['b1']))
{
$t=$_REQUEST['title'];
$n=$_REQUEST['fname'];
$ln=$_REQUEST['lname'];
$e=$_REQUEST['email'];
$p=$_REQUEST['phone'];
$dd=$_REQUEST['bgroup'];
$pd=$_REQUEST['edu_qual'];
$dc=$_REQUEST['gender'];
$pt=$_REQUEST['dob'];
$con=mysqli_connect('localhost','root','','hhearts');
$q="insert into volunteer values(NULL,'$t', '$n','$ln','$e','$p','$dd','$pd','$dc','$pt')";
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
</body>