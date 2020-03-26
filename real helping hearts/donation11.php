<!DOCTYPE html><head>
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
                  <input  type="date" class='form-control datepicker' id='id_checkin' name="ddate">
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
                <option value='paypal'>PayPal</option>
                <option value='netbanking'>Netbanking</option>
                <option value='paytm'>Paytm</option>
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
