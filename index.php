<?php
session_start();
if(isset($_SESSION['username']) && (!isset($_SESSION['key']))){
   header('location:account.php?q=1');
}
else if(isset($_SESSION['username']) && isset($_SESSION['key']) && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39'){
   header('location:dash.php?q=0');
}
else{}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> AUCHI POLYTECHNIC  </title>
   
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/> 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php
if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
}
?>
<script>
function validateForm() {
  var y = document.forms["form"]["name"].value; 
  if (y == null || y == "") {
    document.getElementById("errormsg").innerHTML="Name must be filled out.";
    return false;
  }
  var br = document.forms["form"]["department"].value;
  if (br == "") {
    document.getElementById("errormsg").innerHTML="Please select your department";
    return false;
  }
  if (m.length < 10) {
    document.getElementById("errormsg").innerHTML="Passwords must be 12 digits long";
    return false;
  }
  var g = document.forms["form"]["gender"].value;
  if (g=="") {
    document.getElementById("errormsg").innerHTML="Please select your gender";
    return false;
  }
  var clr = document.forms["form"]["clrname"].value;
  if (clr=="") {
    document.getElementById("errormsg").innerHTML="Please select your colourblind Status";
    return false;
  }
  var x = document.forms["form"]["username"].value;
  if (x.length == 0) {
    document.getElementById("errormsg").innerHTML="Please enter a valid username";
    return false;
  }
  if (x.length < 4) {
    document.getElementById("errormsg").innerHTML="Username must be at least 4 characters long";
    return false;
  }
  var m = document.forms["form"]["phno"].value;
  if (m.length != 10) {
    document.getElementById("errormsg").innerHTML="Phone number must be 10 digits long";
    return false;
  }
  var a = document.forms["form"]["password"].value;
  if(a == null || a == ""){
    document.getElementById("errormsg").innerHTML="Password must be filled out";
    return false;
  }
  if(a.length<4 || a.length>15){
    document.getElementById("errormsg").innerHTML="Passwords must be 4 to 15 characters long.";
    return false;
  }
  var b = document.forms["form"]["cpassword"].value;
  if (a!=b){
    document.getElementById("errormsg").innerHTML="Passwords must match";
    return false;
  }
}
</script>
</head>
<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">AUCHI POLYTECHNIC (Online Quiz)</span></div>
<div class="col-md-2 col-md-offset-4">
<a href="#" class="btn btn-primary logb" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b> Login </b> </span></a></div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:darkblue;font-size:12px;font-weight: bold">Login to your Account</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" id="loginForm" action="login.php?q=index.php" method="POST">
  <div class="form-group">
    <label class="col-md-3 control-label" for="username"></label>
    <div class="col-md-6">
      <input id="username" name="username" placeholder="Username" class="form-control input-md" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-3 control-label" for="password"></label>
    <div class="col-md-6">
      <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-6 col-md-offset-3">
      <button type="submit" class="btn btn-primary" onclick="return validateLoginForm();">Log in</button>
    </div>
  </div>
</form>

      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="bg1">
<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4 panel"> 
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <h3 align="center">REGISTRATION FORM</h3>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <div id="errormsg" style="font-size:14px;font-family:calibri;font-weight:normal;color:red"><?php
if (@$_GET['q7']) {
    echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
}else if(@$_GET['q8']){
	echo '<p style="color:green;font-size:15px;">' . @$_GET['q8'];
}
?></div>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text" value="<?php
if (isset($_GET['name']))
{
echo $_GET['name'];
}?>">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="matno"></label>  
  <div class="col-md-12">
  <input id="matno" name="matno" placeholder="Enter your mat no (Ex.ICT/2252070***)" class="form-control input-md" type="text" value="<?php
if (isset($_GET['matno']))
{
echo $_GET['matno'];
}?>">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Select your gender" class="form-control input-md" >
   <option value="" <?php
if (!isset($_GET['gender']))
    echo "selected";
?>>Select Gender</option>
  <option value="M" <?php
  if (isset($_GET['gender']))
  {
if ($_GET['gender'] == "M")
    echo "selected";
  }
?>>Male</option>
  <option value="F" <?php
  if (isset($_GET['gender']))
  {
if ($_GET['gender'] == "F")
    echo "selected";
  }
?>>Female</option> </select>
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="department"></label>
  <div class="col-md-12">
    <select id="department" name="department" placeholder="Select your department" class="form-control input-md" >
   <option value="" <?php
if (!isset($_GET['department']))
    echo "selected";
?>>Select Department</option>
  <option value="CSE" <?php
  if (isset($_GET['department']))
  {
if ($_GET['department'] == "CSE")
    echo "selected";
  }
  ?>>Computer Science</option>
  <option value="ECE" <?php
  if (isset($_GET['department']))
  {
if ($_GET['department'] == "ECE")
    echo "selected";
  }
?>>Electronics and Communication Engineering</option>
  <option value="EEE" <?php
  if (isset($_GET['department']))
  {
if ($_GET['department'] == "EEE")
    echo "selected";
  }
?>>Electrical and Electronics Engineering</option>
  <option value="IT" <?php
  if (isset($_GET['department']))
  {
  if ($_GET['department'] == "IT")
    echo "selected";
  }
?>>Information Technology</option>
  <option value="CHEM" <?php
  if (isset($_GET['department']))
  {
if ($_GET['department'] == "CHEM")
    echo "selected";
  }
?>>Chemical Engineering</option>
  <option value="CIVIL" <?php
  if (isset($_GET['department']))
  {
if ($_GET['department'] == "CIVIL")
    echo "selected";
  }
?>>Civil Engineering</option> 
  <option value="MECH" <?php
  if (isset($_GET['department']))
  {
if ($_GET['department'] == "MECH")
    echo "selected";
  }
?>>Mechanical Engineering</option> 
  <option value="BIOTECH" <?php
  if (isset($_GET['department']))
  {
if ($_GET['department'] == "BIOTECH")
    echo "selected";
  }
?>>Biotechnology</option> 
  <option value="IMSC" <?php
  if (isset($_GET['department']))
  {
if ($_GET['department'] == "IMSC")
    echo "selected";
  }
?>>Integrated MSc</option> </select>
  </input>
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label title1" for="username"></label>
  <div class="col-md-12">
    <input id="username" name="username" placeholder="Enter your username name" class="form-control input-md" type="username" value="<?php
if (isset($_GET['username']))
{
echo $_GET['username'];
};
?>" style="<?php
if (isset($_GET['q7']))
    echo "border-color:red";
?>">

  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="phno"></label>  
  <div class="col-md-12">
  <input id="phno" name="phno" placeholder="Enter your mobile number" class="form-control input-md" type="number" value="<?php
if (isset($_GET['phno']))
{
echo $_GET['phno'];
}
?>">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12" style="text-align: center"> 
    <input  type="submit" value=" Register Now " class="btn btn-primary" style="text-align:center" />
  </div>
</div>

</fieldset>
</form>
</div>
</div></div>
</div>
<div class="footer">
<div class="col-md-3">
<a href="#" data-toggle="modal" data-target="#login" style="color:lightyellow">Admin Login</a></div>
<a href="#" data-toggle="modal" data-target="#developers" s style="color:lightyellow;" onmouseover="this.style('color:yellow')" target="new">Designed by OKO-OZA HILARY | AUCHI POLYTECHNIC</a>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers Information</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-6">
		<a href="" style="color:#202020;font-size:18px" title="">oko-oza hilary</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+234 07067965122</h4>
		<h4 style="font-family:'typo' ">hilaryokooza@gmail.com</h4>
		<h4 style="font-family:'typo' ">AUCHI POLYTECHNIC AUCHI </h4></div>
		<div class="col-md-6">
		<a href="" style="color:#202020;font-size:18px" title="">AUCHI POLYTECHNIC</a>
		<h4 class="title1"><a href="https://www.auchipolyonline.com" style="color:#202020; font-family:'typo';font-size:16px">Developer : OKO-OZA HILARY</a></h4>
		
		<h4 style="font-family:'typo' ">AUCHI POLYTECHNIC </h4></div>
		</div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:darkblue;font-size:12px;font-weight: bold">Login to Server</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Username" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="30" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
    </div>
  </div>
</div>
<script>
function validateLoginForm() {
  var username = document.forms["loginForm"]["username"].value;
  var password = document.forms["loginForm"]["password"].value;
  
  if (username.length === 0) {
    alert("Please enter a valid username.");
    return false;
  }
  
  if (password.length === 0) {
    alert("Please enter your password.");
    return false;
  }
}
</script>
</body>

</body>
</html>
