<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Cup</title>
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
  height: 300px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 300px;
}
#clbanner{
  height: 100%;
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

}
#uclimage{
width: 400px;
height: 900%;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
  height: 100%;
}
body{
  margin-right: 40px;
  margin-left: 50px;
  margin-top: 0px;
  margin-bottom: 0px;
}
.center2 {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 500px;
  height: 300px;
}
.gif{
  display: block;
  margin-left: 180px;
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
</style>
<body>
  <!-- row -->
<div class="row">
<!-- MIDDLECOLUMN -->
<div class="column middle" style="background-color:#bbb;">
<img id="clbanner" src="images/wcbanner.jpg" alt="Cinque Terre" width="1000" height="300">

<a href="index.php" class="button">
  &lt; &lt; Back
</a>
<div id="top"><img id="uclimage" width="150%"  src="images/wcclogo.png" alt="img">
<h1 style="text-align: center;">FiFa World Cup</h1></div>


<h3 id="ucldescription">The FIFA World Cup, often simply called the World Cup, is an international association football competition contested by the senior men's national teams of the members of the Fédération Internationale de Football Association (FIFA), the sport's global governing body. The championship has been awarded every four years since the inaugural tournament in 1930, except in 1942 and 1946 when it was not held because of the Second World War. The current champion is France, which won its second title at the 2018 tournament in Russia.
<br><br>
The current format involves a qualification phase, which takes place over the preceding three years, to determine which teams qualify for the tournament phase. In the tournament phase, 32 teams, including the automatically qualifying host nation(s), compete for the title at venues within the host nation(s) over about a month.
<br><br>
As of the 2018 FIFA World Cup, twenty-one final tournaments have been held and a total of 79 national teams have competed. The trophy has been won by eight national teams. Brazil have won five times, and they are the only team to have played in every tournament. The other World Cup winners are Germany and Italy, with four titles each; Argentina, France, and inaugural winner Uruguay, with two titles each; and England and Spain, with one title each.
<br><br>
The World Cup is the most prestigious association football tournament in the world, as well as the most widely viewed and followed single sporting event in the world. The cumulative viewership of all matches of the 2006 World Cup was estimated to be 26.29 billion with an estimated 715.1 million people watching the final match, a ninth of the entire population of the planet.[1][2][3][4]
<br><br>
17 countries have hosted the World Cup. Brazil, France, Italy, Germany, and Mexico have each hosted twice, while Uruguay, Switzerland, Sweden, Chile, England, Argentina, Spain, the United States, Japan and South Korea (jointly), South Africa, and Russia have each hosted once. Qatar will host the 2022 tournament, and 2026 will be jointly hosted by Canada, the United States, and Mexico, which will give Mexico the distinction of being the first country to host games in three World Cups.

</h3>

<br>
<hr>
<h1 id="h11">List of FIFA World Cup last 10 finals:</h1>
<br>
<table id="table">
  <tr>
    <th>Year</th>
    <th>Winners</th>
    <th>Runner-up</th>
    <th>Score</th>
  </tr>
  <tr>
    <td> 2018</td>
    <td>France</td>
    <td>Croatia</td>
    <td>4-2</td>
  </tr>
  <tr>
    <td> 2014</td>
    <td>Germany</td>
    <td>Argentina</td>
    <td>1-0</td>
</tr>
<tr>
    <td>2010</td>
    <td>Spain</td>
    <td>Netherlands</td>
    <td>1-0</td>
</tr>
<tr>
    <td>2006</td>
    <td>Italy</td>
    <td>France</td>
    <td>1–1
(5–3 pen.)</td>
</tr>
<tr>
    <td>2002</td>
    <td>Brazil</td>
    <td>Germany</td>
    <td>2–0</td>
</tr>
<tr>
    <td>1998</td>
    <td>France</td>
    <td>Brazil</td>
    <td>3-0</td>
</tr>
<tr>
    <td>1994</td>
    <td>Brazil</td>
    <td>Italy</td>
    <td>0–0
(3–2 pen.)</td>
</tr>
<tr>
    <td>1990</td>
    <td>West Germany</td>
    <td>Argentina</td>
    <td>1-0</td>
</tr>
<tr>
    <td>1986</td>
    <td>Argentina </td>
    <td>West Germany</td>
    <td>3-2</td>
</tr>

</table>
<br>
<hr>

<h1 style="text-align: center; margin-top:20px;">Famous WC Events...</h1>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://en.wikipedia.org/wiki/Diego_Maradona">
      <img src="images/mfe.jpg" alt="kdb" width="100%" height="100%">
    </a>
    <div class="desc"><strong style="font-size: 18px;">Diego Maradona, 1986 World Cup</strong><br> bad interception in this match between Argentina and England sent the ball enticingly up into the air between England goalkeeper Peter Shilton and Argentinian genius Maradona.
Maradona was the first to reach the ball, punching it into the net with his hand rather than his head,
making one of the most memorable moments in World Cup history.
Despite the England players' protests, the goal was upheld because the referee had not seen the incident.
When England and Argentina met in the 1986 World Cup quarter-final, they were fierce rivals on the pitch, thanks in part to the recent Falklands War.</div>
  </div>
</div>

<div class="responsive">
<div class="gallery">
    <a target="_blank" href="https://en.wikipedia.org/wiki/Pel%C3%A9">
      <img src="images/pfe.jpg" alt="kdb" width="100%" height="100%">
    </a>
    <div class="desc"><strong style="font-size: 18px;">Pele, 1970 World Cup</strong><br>The Brazil team of 1970 was, in my opinion, the greatest ever.
They were such an amazing team to watch, even their misses impressed the crowds with their incredible talent.
The two that everyone recalls were both performed by Pele, one of the greatest players in history.
One of them was during the 1970 World Cup which was the first to be broadcast in color around the world.
The fans were enthralled by what they saw from the Brazilian team, especially the incredible audacity shown by players like Pele in pulling off plays that most people could only dream of, creating some of the Best moments in FIFA World Cup history.</div>
  </div>
</div>
<div class="responsive">
<div class="gallery">
    <a target="_blank" href="https://en.wikipedia.org/wiki/Johan_Cruyff">
      <img src="images/cfe.jpg" alt="kdb" width="100%" height="100%">
    </a>
    <div class="desc"><strong style="font-size: 18px;">Johann Cruyff, 1974 World Cup</strong><br>Johann Cruyff's performance in the 1974 World Cup was so spectacular that the trick is now named after him.
In the first round, the move was made against Sweden.
The game ended in a 0-0 draw, but Cruyff's brilliance was well worth the price of entry.
Cruyff collected the ball on the left side of the penalty area and initiated creating one of the Greatest World Cup moments of all time.</div>
  </div>
</div>

<div class="responsive">
<div class="gallery">
    <a target="_blank" href="https://en.wikipedia.org/wiki/Andr%C3%A9s_Iniesta">
      <img src="images/ife.jpg" alt="kdb" width="100%" height="100%">
    </a>
    <div class="desc"><strong style="font-size: 18px;">Andres Iniesta, 2010 World Cup</strong><br>The game between Spain and Holland was extremely close and tense throughout.
It was a physical game, and neither side was able to produce any golden opportunities.
Spain got a big break in the 109th minute when John Heitinga collected his second yellow card for an attack on Iniesta.
With just 10 minutes remaining, Spain pushed on in pursuit of a win, not knowing that they’re about to give us one of the Best World Cup moments of all time.</div>
  </div>
</div>


<div class="clearfix"></div>
<br>
<hr>


<h1 style="text-align:center">FiFa World Cup History</h1>

<h3 id="uclhistory">
The FIFA World Cup, often simply called the World Cup, is an international association football competition contested by the senior men's national teams of the members of the Fédération Internationale de Football Association (FIFA), the sport's global governing body. The championship has been awarded every four years since the inaugural tournament in 1930, except in 1942 and 1946 when it was not held because of the Second World War. The current champion is France, which won its second title at the 2018 tournament in Russia.
<br><br>
The current format involves a qualification phase, which takes place over the preceding three years, to determine which teams qualify for the tournament phase. In the tournament phase, 32 teams, including the automatically qualifying host nation(s), compete for the title at venues within the host nation(s) over about a month.
<br><br>
As of the 2018 FIFA World Cup, twenty-one final tournaments have been held and a total of 79 national teams have competed. The trophy has been won by eight national teams. Brazil have won five times, and they are the only team to have played in every tournament. The other World Cup winners are Germany and Italy, with four titles each; Argentina, France, and inaugural winner Uruguay, with two titles each; and England and Spain, with one title each.
</h3>
<br>
<hr>
<h1 style="text-align:center">FiFa World Cup Anthem</h1>

<h3 id="uclanthem">

The "FIFA Anthem" or "FIFA Hymn" is an instrumental song played at the beginning of FIFA-sponsored events, such as futsal and association football matches and tournaments (like international friendlies, the FIFA World Cup or any other association football competitions), usually as the participants enter the playing area.[1] Occasionally there have been instances where a different song has been used in its place; in the 2002 FIFA World Cup Vangelis' "Anthem".
<br><br>
Since the 2018 FIFA World Cup and 2019 FIFA Women's World Cup , a new anthem, "Living Football" is used as FIFA Anthem, as "Seven Nation Army" by The White Stripes is used for the players entrance.
</h3>
<iframe class="center2" width="560" height="315" src="https://www.youtube.com/embed/whGN2EAImmg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br><hr>
<div class="T">
   <table style="width:100%; background-color: rgb(26, 26, 26);">
  <tr>
  <th style= "width:30%"></th>
  </tr>

    <tr>
  <td colspan="2">
  <h3 id="forbesh3">FIFA World Cup top goalscorers of All-Time </h3><h1 id="forbesh1">The top goalscorer of the inaugural competition was 
    Argentina's Guillermo Stábile with eight goals. Since then, 
    only 22 players have scored more at all the games played at the World Cup than Stábile did throughout the 1930 tournament. 
    The first was Hungary's Sándor Kocsis with eleven in 1954. At the next tournament, 
    France's Just Fontaine improved on this record with 13 goals in only six games. 
    Gerd Müller scored 10 for West Germany in 1970 and broke the overall 
    record when he scored his 14th goal in the World Cup final tournament during West Germany's win in the 1974 final. 
    His record stood for more than three decades until Ronaldo's 15 goals between 1998 and 2006 for Brazil. 
    Germany's Miroslav Klose went on to score a record 16 goals across four consecutive tournaments between 2002 and 2014.</h1>
  </td>  
  </tr>
  
  <tr>
  <td colspan="2">
  <h3 id="forbesh3">#1 | 16 Goals</h3><h1 id="forbesh1">Miroslav Klose</h1>
  </td>  
  </tr>
  <tr>
     <td><img src="images/mk.jfif" width="215px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;"></p></td>
  </tr>
  <tr>
    <td colspan="2">
    <h3 id="forbesh3">#2 | 15 Goals</h3><h1 id="forbesh1">Ronaldo Nazário</h1>
    </td>  
  </tr>
  <tr>
     <td><img src="images/rn.jpg" width="215px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;"></p></td>
  </tr>
  <tr>
    <td colspan="2">
    <h3 id="forbesh3">#3 | 14 Goals</h3><h1 id="forbesh1">Gerd Müller</h1></tr>
    </td>
  <tr>
     <td><img src="images/gm.jpg" width="215px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;"></p></td>
  </tr>
   </table> 
   <br><hr><br>
  </div>

<div class="gif">
<iframe width="500" height="270" src="https://www.youtube.com/embed/WIaWTESJjrg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe style="  margin-left:auto;
  margin-left:auto;"
  src='images/world.gif' frameborder='0' scrolling='no' width='480px' height='270px' style='-webkit-backface-visibility: hidden;-webkit-transform: scale(1);' ></iframe>
</div>
</div>
<br><br>
<!-- MIDDLECOLUMN -->
</div>
<!--/row -->
  </body>
</html> 