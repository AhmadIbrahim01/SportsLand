<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoGP</title>
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
  height: 600px;
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
.fa{
  text-align: center;
  font-size: 30px;
  font-weight: bolder;
}
</style>
<body>
<img id="clbanner" src="images/mgpbanner.jpg" alt="Cinque Terre">

<!-- row -->
<div class="row">
<!-- MIDDLECOLUMN -->
<div class="column middle" style="background-color:#bbb;">
<a href="index.php" class="button">
  &lt; &lt; Back
</a>
<div id="top"><img id="uclimage" style=" width: 450px; height:270px;" src="images/motogplogo.png" alt="img"></div>

<h3 id="ucldescription">Grand Prix motorcycle racing is the premier class of motorcycle road racing events held on road circuits sanctioned by the Fédération Internationale de Motocyclisme (FIM). Independent motorcycle racing events have been held since the start of the twentieth century[1] and large national events were often given the title Grand Prix.[2] The foundation of the Fédération Internationale de Motocyclisme as the international governing body for motorcycle sport in 1949 provided the opportunity to coordinate rules and regulations in order that selected events could count towards official World Championships. It is the oldest established motorsport world championship.[3]
<br><br>
Grand Prix motorcycles are purpose-built racing machines that are unavailable for purchase by the general public and unable to be ridden legally on public roads. This contrasts with the various production-based categories of racing, such as the Superbike World Championship and the Isle of Man TT Races that feature modified versions of road-going motorcycles available to the public. The current top division is known as MotoGP since 2002 when the four-stroke era began. Prior to that, the largest class was 500cc, both of which form a historical continuum as the official World Championship, although all classes have official status.
<br><br>
The championship is currently divided into four classes: the eponymous MotoGP, Moto2, Moto3 and MotoE. The first three classes use four-stroke engines, while the MotoE class (new in 2019) uses electric motorcycles.
<br><br>
The most successful rider in Grand Prix history is Giacomo Agostini with 15 titles and 122 race wins. In the top-flight series, Agostini holds the title record with eight, followed by Valentino Rossi with seven and active rider Marc Márquez with six. As of 2020, Rossi holds the record for most top-flight race wins with 89.
<br>
</h3>
<hr>
<h1 id="h11">MotoGP Championships Last 10 Years:</h1>
<br>
<table id="table">
  <tr>
    <th>Year</th>
    <th>Champion</th>
    <th>Motor</th>
  </tr>
<tr>
    <td>2022</td>
    <td>-</td>
    <td>-</td>
</tr>
<tr>
    <td>2021</td>
    <td>Fabio Quartararo</td>
    <td>Yamaha</td>
</tr>
<tr>
    <td>2020</td>
    <td>Joan Mir</td>
    <td>Suzuki</td>
</tr>
<tr>
    <td>2019</td>
    <td>Marc Márquez</td>
    <td>Honda</td>
</tr>
<tr>
    <td>2018</td>
    <td>Marc Márquez</td>
    <td>Honda</td>
</tr>
<tr>
    <td>2017</td>
    <td>Marc Márquez</td>
    <td>Honda</td>
</tr>
<tr>
    <td>2016</td>
    <td>Marc Márquez</td>
    <td>Honda</td>
</tr>
<tr>
    <td>2015</td>
    <td>Jorge Lorenzo</td>
    <td>Yamaha</td>
</tr>
<tr>
    <td>2014</td>
    <td>Marc Márquez</td>
    <td>Honda</td>
</tr>
<tr>
    <td>2013</td>
    <td>Marc Márquez</td>
    <td>Honda</td>
</tr>
</table><hr>
<h1 style="text-align: center; margin-top:20px;">Famous MotoGP Drivers...</h1>
<!-- PHOTOS --><div class="responsive">
  <div class="gallery">
    <a target="_blank" href="messiucl.jpg">
      <img src="images/vr.jpg" alt="kdb" width="100%" height="100%">
    </a>
    <div class="fa">valentino rossi</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="bayern.PNG">
      <img src="images/ga.jpg" alt="Bayern" width="600" height="400">
    </a>
    <div class="fa">Giacomo Agostini</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="salahucl.jfif">
      <img src="images/mm.jpg" alt="Salah" width="600" height="400">
    </a>
    <div class="fa">Marc Marquez</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="realmadrid.jfif">
      <img src="images/md.jpg" alt="RealMadrid" width="600" height="400">
    </a>
    <div class="fa">Mick Doohan</div>
  </div>
</div>

<div class="clearfix"></div>

<!-- /PHOTOS -->
<hr>

<h1 style="text-align:center">MotoGP History</h1>

<h3 id="uclhistory">
An FIM Road Racing World Championship Grand Prix was first organized by the Fédération Internationale de Motocyclisme in 1949. The commercial rights are now owned by Dorna Sports, with the FIM remaining as the sport sanctioning body. Teams are represented by the International Road Racing Teams Association (IRTA) and manufacturers by the Motorcycle Sport Manufacturers Association (MSMA). Rules and changes to regulations are decided between the four entities, with Dorna casting a tie-breaking vote. In cases of technical modifications, the MSMA can unilaterally enact or veto changes by unanimous vote among its members.[4] These four entities compose the Grand Prix Commission.
<br><br>
There have traditionally been several races at each event for various classes of motorcycles, based on engine size, and one class for sidecars. Classes for 50 cc, 80 cc, 125 cc, 250 cc, 350 cc, 500 cc, and 750 cc solo machines have existed at some time, and 350 cc and 500 cc sidecars. Up through the 1950s and most of the 1960s, four-stroke engines dominated all classes. In the 1960s, due to advances in engine design and technology, two-stroke engines began to take root in the smaller classes.
<br><br>
In 1969, the FIM—citing high development costs for non-works teams due to rules which allowed a multiplicity of cylinders (meaning smaller pistons, producing higher revs) and a multiplicity of gears (giving narrower power bands, affording higher states of tune)—brought in new rules restricting all classes to six gears and most to two cylinders (four cylinders in the case of the 350 cc and 500 cc classes). This led to a mass walk-out of the sport by the previously highly successful Honda, Suzuki and Yamaha manufacturer teams, skewing the results tables for the next several years, with MV Agusta effectively the only works team left in the sport until Yamaha (1973) and Suzuki (1974) returned with new two-stroke designs. By this time, two-strokes completely eclipsed the four-strokes in all classes. In 1979, Honda, on its return to GP racing, made an attempt to return the four-stroke to the top class with the NR500, but this project failed, and, in 1983, even Honda was winning with a two-stroke 500.
</h3>
<hr>
<!-- PHOTOS -->
<h1 style="text-align: center; margin-top:20px;">MotoGP’s top four tracks</h1>
<div class="responsive">
<div class="gallery">
    <a target="_blank" href="messiucl.jpg">
      <img src="images/mgpt1.jpg" alt="kdb" width="100%" height="100%">
    </a>
    <div class="desc"><strong style="font-size: 18px;">For something different: Losail</strong><br><br>
The middle of the desert, floodlights, and an eerie sense of loneliness. Paired with the expectation that accompanies the start of a brand new season, the Qatar Grand Prix at Losail may not be the most crowded of races in terms of fan attendance but it buzzes with a certain excitement.
<br><br>
Losail's been on the calendar since 2004, has been the opening event of the season since 2007, and became the first ever night race in MotoGP's history in 2008.
<br><br>
Fan fact: 3000 homes could be simultaneously powered by the energy used to light up the track.</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="bayern.PNG">
      <img src="images/mgpt2.jpg" alt="Bayern" width="600" height="400">
    </a>
    <div class="desc"><strong style="font-size: 18px;">For history: Assen</strong><br><br>
The only track on the calendar that has hosted a Grand Prix event since the creation of the Motorcycle World Championship in 1949, Assen is something of a mecca for bikers. They ride from all over Europe to experience the MotoGP weekend at the Dutch track, referring to it as 'The Cathedral' of two-wheeled racing, and there's a festival atmosphere each year.
<br><br>
Fan fact: The Assen TT Circuit was purpose built in 1954 and has undergone numerous changes since. Prior to 1954, it was a road course that ran through local villages!
    </div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="bayern.PNG">
      <img src="images/mgpt3.jpg" alt="Bayern" width="600" height="400">
    </a>
    <div class="desc"><strong style="font-size: 18px;">For crowd size: Brno</strong><br><br>
The Czech track regularly attracts one of, if not the biggest turnout of the year throughout the entire weekend, with close to 250,000 fans enjoying the action across all three days. Built in a natural bowl, Brno makes for a great spectator circuit and its fast corners delight the huge turnout year after year. The fact it's surrounded by forest makes for an even more special setting.
<br><br>
Fan fact: The city of Brno has been hosting GPs since 1930, when riders would race through nearby villages as part of the old circuit.
    </div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="bayern.PNG">
      <img src="images/mgpt4.jpg" alt="Bayern" width="600" height="400">
    </a>
    <div class="desc"><strong style="font-size: 18px;">For fans: Mugello</strong><br><br>
Every circuit that MotoGP visits throughout the season has fantastic fans, but the feverish nature of those at Mugello makes the Italian Grand Prix something very special. A track invasion after the race sees the main straight turn into a sea of people, as they chant beneath the podium waiting for home hero Valentino Rossi to appear – regardless of whether he has finished in the top three or not!
<br><br>
Fan fact: Valentino Rossi has won nine times at Mugello, his 'home' track.
      </div>
  </div>
</div>



<div class="clearfix"></div>

<!-- /PHOTOS -->
<hr><div class="T">
   <table style="width:100%; background-color: rgb(26, 26, 26);">
  <tr>
  <th style= "width:30%"></th>
  </tr>

    <tr>
  <td colspan="2">
  <h3 id="forbesh3">Top 3 MotoGP Riders of all Time</h3><h1 id="forbesh1"></h1>
  </td>  
  </tr>
  
  <tr>
  <td colspan="2">
  <h3 id="forbesh3">#1</h3><h1 id="forbesh1">Valentino Rossi</h1>
  </td>  
  </tr>
  <tr>
     <td><img src="images/mgp1.jpg" width="400px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;">
     Valentino Rossi has been voted the MotoGP GOAT. This means that he is the greatest MotoGP GOAT of all time.
     <br><br>
     The Italian Motorsport champion has nine titles, seven of which were in the top-level premiership.
    </p></td>
  </tr>
  <tr>
    <td colspan="2">
    <h3 id="forbesh3">#2</h3><h1 id="forbesh1">Giacomo Agostini</h1>
    </td>  
  </tr>
  <tr>
     <td><img src="images/mgp2.jpg" width="400px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;">Giacomo Agostini was named runner-up. The Italian ambassador is a strong advocate for the sport, as he continues to work for Grand Prix Racing.
     <br><br>
     Yamaha fans will never forget Agostini, the first Yamaha victory he won. In 1975, he won the last Championship with Yamaha ending the dominance of his previous employer, MV Agusta.
    </p></td>
  </tr>
  <tr>
    <td colspan="2">
    <h3 id="forbesh3">#3</h3><h1 id="forbesh1">Marc Marquez</h1></tr>
    </td>
  <tr>
     <td><img src="images/mgp3.jpg" width="400px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;">Marc Marquez was the first to break into MotoGP racing. He became the first person to win in MotoGP racing since Kenny Roberts, 1978.
     <br><br>
     He was nicknamed “Ant of Cervera” (meaning the “Thunder of Cervera”) because of his winning streak.
    </p></td>
  </tr>
   </table> 
   <br><hr><br>
  </div>
<!-- GIf -->
    <img id="uclgif" style="float: left; margin-left:150px;" src="images/motogp1.gif" alt="Snow">
    <img id="uclgif" style="float: right; margin-right:150px;" src="images/motogp.gif" alt="Mountains">
<!-- /GIf -->

</div>
<br>
<!-- MIDDLECOLUMN -->
</div>
<!--/row -->
</div>
</body>
</html>