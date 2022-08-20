<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LBL</title>
</head>
<style>


/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}
/*
.left, .right {
  width: 20%;
}
*/
.middle {
  width: 100%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
  /* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
.button {
  color: #1cc49d;
  background-color: #1b2f31;
  border-radius: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 3em;
  width: 8em;
  font-size: large;
  text-decoration: none;
  font-weight: 600;
}
#uclimage{
  object-fit: cover;
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: auto;
  margin-bottom: 0px;
  width: 1000px;
  height: 400px;
  overflow: hidden;
}
#clbanner{
  object-fit: cover;
  height: 330px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}
div.gallery { 
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: justify;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
#ucldescription{
  border: 1px solid black;
  padding: 10px;
  width: 55%;
  height: 100%;
  text-align: justify;
  margin-left: auto;
  margin-right: auto;
  font-weight: 50;
}
#uclhistory
{
  border: 1px solid black;
  padding: 10px;
  width: 55%;
  height: 100%;
  text-align: justify;
  margin-left: auto;
  margin-right: auto;
  font-weight: 50;
}
#uclanthem
{
  border: 1px solid black;
  padding: 10px;
  width: 55%;
  height: 100%;
  text-align: justify;
  margin-left: auto;
  margin-right: auto;
  font-weight: 50;
}
#table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
  float:none;
  text-align: center;
  margin-left: 265px;
}

#table td, #table th {
  border: 1px solid #ddd;
  padding: 8px;
}

#table tr:nth-child(even){background-color: #f2f2f2;}

#table tr:hover {background-color: #ddd;}

#table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}
#h11{
  text-align: center;
  margin-bottom: 0px;

}
body{
  margin-right: 40px;
  margin-left: 50px;
  margin-top: 0px;
  margin-bottom: 0px;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
  height: 100%;
}

.center2 {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 500px;
  height: 300px;
}
#uclgif{
  width: 480px;
  height: 270px;
}
#forbesp{
  text-align: justify;
  font-size: 15px;
  color: #fff;
}
#forbesh3{
text-align: center;
color: #fff;

}
#forbesh1{
  text-align: center;
  color: green;
  margin-top: auto;


}
#forbesh5{
  text-align: center;
  color: #fff;
}
.photos{
  display: block;
  margin-left: 250px;
  margin-right: auto;
}
</style>
<body>
<img id="clbanner" src="images/lb.png" alt="Cinque Terre">

<!-- row -->
<div class="row">
<!-- MIDDLECOLUMN -->
<div class="column middle" style="background-color:white;">
<a href="index.php" class="button">
  &lt; &lt; Back
</a>
<div id="top"><img id="uclimage" style=" width: 450px; height:100px;" src="images/flb.png" alt="img"></div>

<h3 id="ucldescription">The league is known due to the success of the Lebanese teams in the Asian competitions such as the FIBA Asia Champions Cup, Arab Club Championship, and West Asian Basketball League. Many undrafted and free agent players from Europe and the NBA play in the Lebanese league.[citation needed]

<br><br>The league is the first division in Lebanese basketball. The team that finishes last each season is relegated to the Second Division, while the Second Division's top four teams compete in a play-off system. The team that wins is promoted for the next season.[citation needed]

</h3>

<br><hr>

<h1 style="text-align: center; margin-top:20px;">Top 3 Lebanese Basketball Players</h1>
<div class="photos">
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="ahabib.png">
      <img src="images/ahabib.png" alt="kdb" width="100%" height="100%">
    </a>
    <div class="desc"><strong>Habib ABDALLAH</strong></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="bayern.PNG">
      <img src="images/fadi.png" alt="Bayern" width="600" height="400">
    </a>
    <div class="desc"><strong>Fadi El Khatib</strong><br><p style="text-align: justify;">Fadi El Khatib, nicknamed the Lebanese Tiger, is a retired Lebanese professional basketball player who last played for Champville SC in the Lebanese Basketball League.</div>
</p>
</div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="salahucl.jfif">
      <img src="images/jean.jpg" alt="Salah" width="600" height="400">
    </a>
    <div class="desc"><strong>Jean Abdelnour</strong><br><p style="text-align: justify;">
    Jean Abdel-Nour is a Lebanese basketball player with Sporting Al Riyadi Beirut of the Lebanese Basketball League. He had a successful 2002-03 season with Ghazir which led him to be signed by the Bluestars for the 2003-04 season.
    </p></div>
  </div>
</div>
</div>



<div class="clearfix"></div>
<br>
<iframe class="center2"  width="560" height="315" src="https://www.youtube.com/embed/CN1XJuOJiVA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br><hr>
<h1 style="text-align:center">LBL History</h1>

<h3 id="uclhistory">
The initial Lebanese basketball league was formed in as early as the 1950s; however, it was stopped during the Lebanese Civil War. In 1992, the league was reformed into a fully professional format.[citation needed]
<br><br>
In 1997, Sporting Club (Al Riyadi) finished as Lebanese champions, allowing them to participate in the 1998 FIBA Asia Champions Cup . There, they finished 3rd place. That same year, Al Riyadi lost the Lebanese championship to their big rivals Sagesse Club (Hekmeh).[citation needed]
<br><br>
In 1998, Beirut hosted the Arab Club Championship. Hekmeh won, the first ever basketball trophy for Lebanon.[citation needed]
<br><br>
In 1999, Beirut hosted the Arab Club Championship again. Hekmeh repeated as champions.[citation needed]
<br><br>
Al Riyadi has its greatest success in the Arab Club Championship during the 2000s. They won the title in 2005, 2006, 2007, 2009, and 2010. In 2009, they defeated their fellow Lebanese team Hekmeh in the final, the first time two Lebanese teams met in the final. The 2009 tournament was held in Beirut.[citation needed]
</h3>
<br><hr>
<!-- GIf -->
    <img style="float: left; margin-left:150px;" src="images/nbagif.gif" alt="Snow">
    <img id="uclgif" style="float: right; margin-right:150px;" src="images/nbagif1.gif" alt="Mountains">
<!-- /GIf -->
<br>
<!-- MIDDLECOLUMN -->
</div>
<!--/row -->
</div>
</body>
</html>