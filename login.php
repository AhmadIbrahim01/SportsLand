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
  background-color: #abcbb2;
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
#invalid{
  text-align: center;
  color: red;
    display: inline-block;
    margin-left: 470px;
    font-size: 60px;
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

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
  <div class="container">

    <h1 style="    text-align: center;
    font-size: 50px;" class="h1">Sign In</h1>
    <br><hr>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    <br><br><hr>
    <button type="submit" class="registerbtn">Sign in</button>
  </div>

  <div class="container signin">
    <p>Don't have an account? <a id="ref" href="register.php">Register Now</a>.</p>
  </div>
</form>

</div>
  <!-- /MIDDLECOLUMN -->


  <!-- RIGHTCOLUMN -->
    <div class="column right" style="background-color:white;">
  <!-- /RIGHTCOLUMN -->

</div>

  <!-- /row -->



</body>

</html>
<?php
require_once 'connect.php';
if(isset($_POST['username'])&&isset($_POST['psw'])){
$u = $_POST['username'];
$p = $_POST['psw'];
$query = "SELECT * from user WHERE `username`='$u' and `psw`='$p'";
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result)==0){
echo "<p id = 'invalid'>invalid username or password</p>";
}
else {
$_SESSION['isloggedin']=1;
$_SESSION['xyz']=$u;

?>

<script type="text/javascript">
window.location.href = 'http://localhost/SeniorProjectAhmadAndOmar/index.php';
</script>
<?php
}
}
?>
