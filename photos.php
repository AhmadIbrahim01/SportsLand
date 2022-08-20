<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos</title>
</head>
<style>
#img{
    padding-left: 30px;
    padding-right: 30px;
}
#h{
   font-size: 50px;
    text-align: center;
}
/* 3COLUMNS */
/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}
.left{
  width: 20%;
}
.right{
  width: auto;
text-align: center;
}
.middle {
  width: 60%;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* /3COLUMNS */
h6{
    text-align: center;
}
</style>
<body>
<?php
include "header.php"
?> 

<!-- row -->
<div class="row">
  <!-- LEFTCOLUMN -->
  
   <div class="column left" style="background-color:white; margin-left: 12px;">
  <h2 style="text-align: center;">News:</h2>
  <rssapp-wall id="7IIgzt0iAtCOxL8E"></rssapp-wall><script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>  
  </div>
  <!-- /LEFTCOLUMN -->

  <!-- MIDDLECOLUMN -->
  <div class="column middle" style="background-color:#D8DAD4;">
  <div>
    <h1 id="h">PHOTOS</h1><hr><hr><hr><hr>
    <h6>Scroll Down</h6><hr><br>
    <div id="img">
    <div id="top"><img width="100%"  src="images/pic1.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic2.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic3.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic4.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic5.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic23.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic7.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic8.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic9.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic10.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic11.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic12.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic13.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic14.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic15.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic16.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic17.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic18.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic19.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic20.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic21.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic15.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic22.png" alt="img"></div>
    <div id="top"><img width="100%"  src="images/pic23.png" alt="img"></div>
    </div>
</div>
</div>
<!-- /MIDDLECOLUMN -->
  <!-- RIGHTCOLUMN -->
  <div class="column right" style="background-color:#ccc;">
  <img src="images/ball.jpg" width="250px"><br>
  <img src="images/right1.gif" width="250px"><br>
  <img src="images/right2.gif" width="250px"><br>
  <img src="images/right3.gif" width="250px"><br>
  <img src="images/right4.gif" width="250px"><br>
  <img src="images/right5.gif" width="250px"><br>
  <img src="images/right6.gif" width="250px"><br>
  <img src="images/right7.gif" width="250px"><br>
  <img src="images/right8.gif" width="250px"><br>
  <img src="images/right9.gif" width="250px"><br>
  <img src="images/right10.gif" width="250px"><br>
  <img src="images/right11.gif" width="250px"><br>
  <img src="images/right12.gif" width="250px"><br>
  <img src="images/right14.gif" width="250px">


  </div>
  <!-- /RIGHTCOLUMN -->
</div>

  <!-- /row -->
</body>
</html>
<?php
include "footer.php"
?>   