<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
.content {
  max-width: 900px;
  margin: auto;
  background-color:#abcbb2;
  margin-top: 100px;
  margin-bottom: 100px;
  height: 100%;
  border-style: groove;
}
h1{
    float: left 100%;
    margin-top: 20px;
    margin-bottom: 20px;
    
}
.container {
  padding: 16px;
}


input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


.registerbtn {
  background-color: #b39045;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.h1{font-style: oblique;
font-weight: bold;}

.span{color:blanchedalmond;
    font-size: 1.2em;
    line-height: 30px;
    font-weight: 700;
    font-style: oblique;}

    #href{color: white;
    text-decoration: none;}

#li{
    color:blanchedalmond;
    text-decoration: none;
}
#ref{
    text-decoration: none;
    color: darkgray;
}
#home{
    padding:5px;
    background-color: #b39045;
    opacity: 0.5;
}

.img1{
    width: 15%;
    height: 15%;
    border-radius: 50%;
}
.img2{
    width: 45%;
    height: 45%;
    border-radius: 50%;
}
.img3{

    width: 100%;
    height: 100%;
    border-radius: 50%;
}
h1{
  margin-left: 31%;
  font-size: 55px;
}
#profile{
  margin-left: 22%;
  margin-right: 80%;
  padding: 10px 100px;
  font-size: 35px;
  color: #b39045;
  background-color: white;
  border-radius: 10%;
}
th{
  padding: 5px 5px;
  text-align: center;
}
td{
  padding: 5px 5px;
  color: green;
  text-align: center;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 30px;
  color: black;
}

a:hover {
  opacity: 0.7;
}
body{
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
/* The image used */
background-image: url("images/rw5.jfif"); 

/* Full height */
height: 100%; 

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
#back{
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: green;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    width: 98%;
    font-size: 18px;
   }
   #back:hover{
    background-color: black;
    color: green;   }
</style>



<div class="content">

<a href="index.php" id="back">
 Back
</a>
<br><br>
<img src="images/pfp3.jpg"width="160px" style="border-radius: 1000px; display:block; margin-left:auto; margin-right:auto;"><br><hr>
<?php
include 'connect.php';
echo "<h1 style='font-size:100px; margin-left:auto; margin-right:auto; text-align:center; '>$_SESSION[xyz]</h1>";
$allUsers = "SELECT * FROM user WHERE username ='$_SESSION[xyz]'";
$result = mysqli_query($con, $allUsers);
if (mysqli_num_rows($result) == 0) {
    echo "<h3 style='text-align:center; font-size:30px; color:red;'>No users info.</h3>";
    } else {
        
        echo "<table id='table' width=100%>"
        . "<tr id='tr'>"
        . "<th><i class='fas fa-user-circle' style='font-size:25px'></i></th>"
        . "<th><i class='fas fa-address-book' style='font-size:25px'></i></th>"
        . "<th><i class='fas fa-house-user' style='font-size:25px'></i></th>"
        . "<th><i class='fa fa-venus-mars' style='font-size:25px'></i></th>"
        . "<th><i class='fas fa-user-edit' style='font-size:25px'></i></th>"

        . "</tr>" . "<hr>";
        
        while($row=mysqli_fetch_assoc($result)){
            
            $type= $row['username'];
            
            echo "<tr id='tr2'>"
            
            . "<td  style='font-size:25px'>". $row['fname'] ."</td>"
            . "<td  style='font-size:25px'>". $row['email'] ."</td>"
            . "<td  style='font-size:25px'>". $row['address'] ."</td>"
            . "<td  style='font-size:25px'>". $row['gender'] ."</td>"

            . "<td  style='font-size:25px'><a class='ref' href='editProfile.php?type=$type'>Edit</a></th>" . "</td>"

            . "</tr>";




            ;
            
            }
            
        echo "<table id='table' width=100%>"
        . "<tr>"
        . "<th><i class='fab fa-facebook' style='font-size:25px'></i></th>"
        . "<th><i class='fab fa-twitter' style='font-size:25px'></i></th>"
        . "<th><i class='fab fa-linkedin' style='font-size:25px'></i></th>"

        . "</tr>" . "<hr>";

        echo "<tr id='tr2'>"
            

        . "<td  style='font-size:25px'><a class='ref' target='_blank' href='https://www.facebook.com/'>Facebook</a></th>" . "</td>"
        . "<td  style='font-size:25px'><a class='ref' target='_blank' href='https://twitter.com/?lang=en'>Twitter</a></th>" . "</td>"
        . "<td  style='font-size:25px'><a class='ref' target='_blank' href='https://www.linkedin.com/'>LinkedIn</a></th>" . "</td>"
        . "</tr>";
            
    }

 
    
?>

</form>
    </div>
    
</body>
</html>


