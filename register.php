<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* 3COLUMNS */
/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}
.left{
  width: 15%;
  opacity: 0;
}
.right{
  width: 15%;
text-align: center;
opacity: 0;
}
.middle {
  width: 70%;
  opacity: 1;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* /3COLUMNS */


.row{
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
/* The image used */
background-image: url("images/rw3.jpg");

/* Full height */
height: 100%; 

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
html {
  height: 100%;
  margin: 0;
  
}
* {
  box-sizing: border-box;
  
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  border-radius: 10px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    border-radius: 10px;
  background-color: green;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
  
}
</style>
</head>
<body>
<?php
include "header2.php"
?>   



<!-- row -->
<div class="row" style="background-color: white;">
  <!-- LEFTCOLUMN -->
  <div class="column left" style="background-color:white; margin:0px;">
  </div>
  <!-- /LEFTCOLUMN -->

    <!-- MIDDLECOLUMN -->
    <div class="column middle" style="background-color:black;">


    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" onsubmit='return validateform();'>
      <div class="container" style="background-color:#abcbb2;">
    <h1 style="text-align: center; font-size:50px;">Register</h1><br>
    <hr>


<table>
  <tr> 
<th style="width: 50%;">
    <label style="display: block;"  for="fname">First name</label>
    <input type="text" placeholder="Enter First Name" id="fname" name="fname" style="width: 450px; margin-left:100px;">
    </th>
<th style="width: 50%;">
    <label style="display: block;"  for="lname">Last name</label>
    <input type="text" placeholder="Enter First Name" id="lname" name="lname" style="width: 450px; margin-left:53px;">
</th>
  </tr>
</table>

    <label style="margin-left:40px;" for="email"><b>Email</b></label><br>
    <input style="margin-left:40px; width:92%;" type="text" placeholder="Enter Email" name="email" id="email" required>

    <label style="margin-left:40px;" for="username"><b>Username</b></label>
    <input style="margin-left:40px; width:92%;" type="text" placeholder="Enter Username" name="username" id="username" required>

    <label style="margin-left:40px;" for="address"><b>Address</b></label>
    <input style="margin-left:40px; width:92%;" type="text" placeholder="Enter Addreass" name="address" id="address" required>
    <hr>
    <b style="display: block; text-align: center;">Please select your Gender</b><br>
    <div style="display: block; text-align: center;">
 <input type="radio" id="male" name="gender" value="M">
 <label for="male">Male</label>
 <input type="radio" id="female" name="gender" value="F">
 <label for="female">Female</label><br><br>
</div>
<hr>
    <table>
  <tr> 
<th style="width: 50%;">
    <label style="display: block;" for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required style="width: 450px; margin-left:100px;">
    
</th>
    <th style="width: 50%;">

    <label style="display: block;" for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm  Password" name="psw-repeat" id="psw-repeat" onblur="check_pass_match()" required style="width: 450px; margin-left:50px;">

    </th>

    
  </tr>
</table>
<p style="display: block; text-align: center;" id="second_pass_message">Attention! The passwords should match.</p>
<div  style="display: block; text-align: center;">
<input type="checkbox" onclick="myFunction();myFunction1();">Show Password<br><br><hr>
</div>


    <p style="text-align: center;">By creating an account you agree to our <a target="_blank" href="privacypolicy.php">Terms & Privacy</a>.</p>
<br><br>
    <p style="text-align: center;" id="subscribe"> 
    <input type="checkbox" id="subscribe" name="subscribe" value="subscribe">
    <label  for="subscribe"> Subscribe for monthly news</label><br>
    </p>
    

    <button  style="display: block; text-align: center;" type="submit" class="registerbtn" onclick="matchPassword()">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>

</form>

</div>
  <!-- /MIDDLECOLUMN -->


  <!-- RIGHTCOLUMN -->
    <div class="column right" style="background-color:white;">
  <!-- /RIGHTCOLUMN -->

</div>

  <!-- /row -->
  <?php
include 'connect.php';
if(isset($_POST['username']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['psw']) && isset($_POST['address'])){
$username = $_POST['username'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$address = $_POST['address'];
$insertquery = "INSERT INTO user (username, fname, lname, gender, email, psw, address) VALUES('$username', '$fname', '$lname', '$gender', '$email', '$psw', '$address')";
mysqli_query($con, $insertquery);}


if (isset($_POST['subscribe']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['psw']) && isset($_POST['address'])) {
  $email = $_POST['email'];
  $username = $_POST['username'];
  $address = $_POST['address'];
  $sql2 = "INSERT INTO subscribers VALUES ('$username' ,  '$email')";
  mysqli_query($con, $sql2); 
}

?>
<script>
    function myFunction() {
  var x = document.getElementById("psw-repeat");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myFunction1() {
  var y = document.getElementById("psw");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
function check_pass_match(){
var first_password = document.getElementById("psw").value;
var second_password = document.getElementById("psw-repeat").value;
m = document.getElementById("second_pass_message");

if(first_password != second_password)
{ m.style.color="red";
m.innerHTML="Passwords don't match!";
return false;
}

else {
m.innerHTML="Passwords match.";
m.style.color="green";
return true; } 
}

function validateform(){
if (check_pass_match())
    {return true;}
else {return false;}
}
</script>
</body>
</html>
