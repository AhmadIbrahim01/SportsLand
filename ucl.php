<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCL</title>
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
  font-weight: 50;
}
#table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
  float:none;
  text-align: center;
  margin-left: 330px;

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
</style>
<body>
<img id="clbanner" src="images/ChampionsLeagueBanner.png" alt="Cinque Terre" width="1000" height="300">

<!-- row -->
<div class="row">
<!-- MIDDLECOLUMN -->
<div class="column middle" style="background-color:#bbb;">
<a href="index.php" class="button">
  &lt; &lt; Back
</a>
<div id="top"><img id="uclimage" style="object-fit: cover; width: 850px; height:200px;" src="images/loogo.png" alt="img"></div>

<h3 id="ucldescription">
  The UEFA Champions League (abbreviated as UCL) is an annual club football competition organised by the Union of European Football Associations (UEFA) and contested by top-division European clubs, deciding the competition winners through a round robin group stage to qualify for a double-legged knockout format, and a single leg final. It is one of the most prestigious football tournaments in the world and the most prestigious club competition in European football, played by the national league champions (and, for some nations, one or more runners-up) of their national associations.
  <br><br>
  Introduced in 1955 as the Coupe des Clubs Champions Européens (French for European Champion Clubs' Cup), and commonly known as the European Cup, it was initially a straight knockout tournament open only to the champions of Europe's domestic leagues, with its winner reckoned as the European club champion. The competition took on its current name in 1992, adding a round-robin group stage in 1991 and allowing multiple entrants from certain countries since the 1997–98 season.[1] It has since been expanded, and while most of Europe's national leagues can still only enter their champion, the strongest leagues now provide up to four teams.[2][3] Clubs that finish next-in-line in their national league, having not qualified for the Champions League, are eligible for the second-tier UEFA Europa League competition, and from 2021, teams not eligible for the UEFA Europa League will qualify for a new third-tier competition called the UEFA Europa Conference League.[4]
  <br><br>
  In its present format, the Champions League begins in late June with a preliminary round, three qualifying rounds and a play-off round, all played over two legs. The six surviving teams enter the group stage, joining 26 teams qualified in advance. The 32 teams are drawn into eight groups of four teams and play each other in a double round-robin system. The eight group winners and eight runners-up proceed to the knockout phase that culminates with the final match in late May or early June.[5] The winner of the Champions League qualifies for the following year's Champions League, the UEFA Super Cup, and the FIFA Club World Cup.[6][7]
  <br><br>
  Spanish clubs have the highest number of victories (19 wins), followed by England (14 wins) and Italy (12 wins). England has the largest number of winning teams, with five clubs having won the title. The competition has been won by 22 clubs, 13 of which have won it more than once and eight successfully defended their title.[8] Real Madrid is the most successful club in the tournament's history, having won it 14 times, including the first five seasons and also five of the last nine.[9] Only one club has won all of their matches in a single tournament en route to the tournament victory: Bayern Munich in the 2019–20 season.[10] Real Madrid are the current European champions, having beaten Liverpool 1–0 in the 2022 final.
</h3>

<br>
<hr>
<h1 id="h11">UCL Winners Last 10 Years:</h1>
<br>
<table id="table">
  <tr>
    <th>Season</th>
    <th>Winners</th>
    <th>Runners-up</th>
    <th>Score</th>
  </tr>
  <tr>
    <td>2021-2022</td>
    <td>Real Madrid</td>
    <td>Liverpool</td>
    <td>1-0</td>
  </tr>
  <tr>
    <td>2020-21</td>
    <td>Chelsea</td>
    <td>Manchester City</td>
    <td>1-0</td>
</tr>
<tr>
    <td>2019-20</td>
    <td>Bayern Munich</td>
    <td>Paris Saint-Germain</td>
    <td>1-0</td>
</tr>
<tr>
    <td>2018-19</td>
    <td>Liverpool</td>
    <td>Tottenham Hotspur</td>
    <td>2-0</td>
</tr>
<tr>
    <td>2017-18</td>
    <td>Real Madrid</td>
    <td>Liverpool</td>
    <td>3-1</td>
</tr>
<tr>
    <td>2016-17</td>
    <td>Real Madrid</td>
    <td>Juventus</td>
    <td>4-1</td>
</tr>
<tr>
    <td>2015-16</td>
    <td>Real Madrid</td>
    <td>Atlético Madrid</td>
    <td>1-1 (5-3)</td>
</tr>
<tr>
    <td>2014-15</td>
    <td>Barcelona</td>
    <td>Juventus</td>
    <td>3-1</td>
</tr>
<tr>
    <td>2013-14</td>
    <td>Real Madrid</td>
    <td>Atlético Madrid</td>
    <td>4-1</td>
</tr>
<tr>
    <td>2012-13</td>
    <td>Bayern Munich</td>
    <td>Borussia Dortmund</td>
    <td>2-1</td>
</tr>
<tr>
    <td>2011-12</td>
    <td>Chelsea</td>
    <td>Bayern Munich</td>
    <td>1-1 (4-3)</td>
</tr>
</table><hr>
<h1 style="text-align: center; margin-top:20px;">Famous UCL Events...</h1>
<!-- PHOTOS -->
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://en.wikipedia.org/wiki/2010%E2%80%9311_UEFA_Champions_League">
      <img src="images/messiucl.jpg" alt="Messi" width="100%" height="100%">
    </a>
    <div class="desc">The 2010–11 UEFA Champions League was the 56th season of Europe's premier club football tournament organised by UEFA, and the 19th under the current UEFA Champions League format. The final was held at Wembley Stadium in London on 28 May 2011,[1] where Barcelona defeated Manchester United 3–1. Internazionale were the defending champions, but were eliminated by Schalke 04 in the quarter-finals. As winners, Barcelona earned berths in the 2011 UEFA Super Cup and the 2011 FIFA Club World Cup.</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://en.wikipedia.org/wiki/2020_UEFA_Champions_League_Final">
      <img src="images/bayern.PNG" alt="Bayern" width="600" height="400">
    </a>
    <div class="desc">The 2020 UEFA Champions League Final was the final match of the 2019–20 UEFA Champions League, the 65th season of Europe's premier club football tournament organised by UEFA, and the 28th season since it was renamed from the European Champion Clubs' Cup to the UEFA Champions League. It was played on 23 August 2020 at the Estádio da Luz in Lisbon, Portugal, between French club Paris Saint-Germain, in their first European Cup final, and German club Bayern Munich. The match was held behind closed doors due to the COVID-19 pandemic in Europe.</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://en.wikipedia.org/wiki/2019_UEFA_Champions_League_Final">
      <img src="images/salahucl.jfif" alt="Salah" width="600" height="400">
    </a>
    <div class="desc">Liverpool won the UCL 2018/19 with the egyption king MO Salah. Therefore, they have now 6 UCL trophies</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League">
      <img src="images/realmadrid.jfif" alt="RealMadrid" width="600" height="400">
    </a>
    <div class="desc">The 2016–17 UEFA Champions League was the 62nd season of Europe's premier club football tournament organised by UEFA, and the 25th season since it was renamed from the European Champion Clubs' Cup to the UEFA Champions League.

The final was played between Juventus and Real Madrid at the Millennium Stadium in Cardiff, Wales.[5][6] It was the second time that the two teams faced each other in the competition's decisive match, having previously met in the 1998 final. Real Madrid, the defending champions, beat Juventus 4–1 to win a record-extending 12th title. With this victory, Real Madrid became the first team to successfully defend their title in the Champions League era, and the first to successfully defend a European Cup since Milan in 1990.</div>
  </div>
</div>
<!-- /PHOTOS -->

<div class="clearfix"></div>

<hr>

<h1 style="text-align:center">Chmapions League History</h1>

<h3 id="uclhistory">

The first time the champions of
 two European leagues met was ain what was nicknamed  1895 World Championship, 
 when English champions Sunderland beat Scottish champions Hearts 5–3. The first p
 an-European tournament was the Challenge Cup, a competition between clubs in the A
 ustro-Hungarian Empire. The Mitropa Cup, a competition modelled after the Challenge Cu
 p, was created in 1927, an idea of Austrian Hugo Meisl, and played between Central Europea
 n clubs. In 1930, the Coupe des Nations (French: Nations Cup), the first attempt to create a c
 up for national champion clubs of Europe, was played and organised by Swiss club Servette. Held in Geneva
 , it brought together ten champions from across the continent. The tournament was won by Újpest of Hungary
 . Latin European nations came together to form the Latin Cup in 1949.
<br><br>
After receiving reports from his journalists over the highly successful South American Championshi
p of Champions of 1948, Gabriel Hanot, editor of L'Équipe, began proposing the creation of a continent-
wide tournament. In interviews, Jacques Ferran (one of the founders of the European Champions Cup, together with Gabriel Hanot), 
said that the South American Championship of Champions was the inspiration for the European Champions Cup. After Stan Cullis declared 
Wolverhampton Wanderers "Champions of the World" following a successful run of friendlies in the 1950s, in particular a 3–2 
friendly victory against Budapest Honvéd, Hanot finally managed to convince UEFA to put into practice such a tournament. It wa
s conceived in Paris in 1955 as the European Champion Clubs' Cup.
</h3>
<hr>
<h1 style="text-align:center">Chmapions League Anthem</h1>

<h3 id="uclanthem">

The UEFA Champions League anthem, officially titled simply as "Champions League", was written by Tony Britten, and is an adaptation of George Frideric Handel's 1727 anthem Zadok the Priest (one of his Coronation Anthems).[57][58] UEFA commissioned Britten in 1992 to arrange an anthem, and the piece was performed by London's Royal Philharmonic Orchestra and sung by the Academy of St. Martin in the Fields.[57] Stating "the anthem is now almost as iconic as the trophy", UEFA's official website adds it is "known to set the hearts of many of the world's top footballers aflutter".

</h3>
<iframe class="center2"  src="https://www.youtube.com/embed/ltcHzgUc944" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<hr>
<div class="T">
   <table style="width:100%; background-color: rgb(26, 26, 26);">
  <tr>
  <th style= "width:30%"></th>
  </tr>

    <tr>
  <td colspan="2">
  <h3 id="forbesh3">UCL </h3><h1 id="forbesh1">  Cristiano Ronal
  do leads the UEFA Champions League in all-tim
  e goals scored, scoring a total of 135 goals. L
  ionel Messi sits in second place with 120 goals. B
  oth players stand well clear of the other contenders,
   with third placed Robert Lewandowski scoring 73 goals.
    Since the UEFA Champions League (UCL) changed its name f
    rom the Europeans Champions Cup in 1992, overall revenues have increased significantly</h1>
  </td>  
  </tr>
  
  <tr>
  <td colspan="2">
  <h3 id="forbesh3">#1 | 140 Goals in 183 Apps</h3><h1 id="forbesh1">Cristiano Ronaldo</h1>
  </td>  
  </tr>
  <tr>
     <td><img src="images/forbesr.jpg" width="215px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;">Cristiano became the first player to reach 100 Champions League goals in Real Madrid’s 4-2 win over Bayern in April 2017. It would take Messi another 11 months to get to three figures.

As it stands, Cristiano is on 140 goals in the Champions League and Messi is 15 behind on 125 although both are still active and at new clubs, although neither featuring past the round of 16 this season.</p></td>
  </tr>
  <tr>
    <td colspan="2">
    <h3 id="forbesh3">#2 | 125 Goals in 156 Apps</h3><h1 id="forbesh1">Lionel Messi</h1>
    </td>  
  </tr>
  <tr>
     <td><img src="images/forbesm2.jpg" width="215px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;">Lionel Messi left Barcelona for Paris Saint-Germain in the summer of 2021 having scored 120 goals for the Spanish club in the UEFA Champions League – a record that even Cristiano Ronaldo, with his 105 for Madrid, could not challenge, although the Portuguese phenomenon reached the 100 mark for his club first.</p></td>
  </tr>
  <tr>
    <td colspan="2">
    <h3 id="forbesh3">#3 | 86 Goals in 106 Apps</h3><h1 id="forbesh1">Robert Lewandowski</h1></tr>
    </td>
  <tr>
     <td><img src="images/lewa.jpg" width="215px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;">In the decade since arriving in Germany from Lech Poznan, Lewy has never missed more than six consecutive games with injury. Dessert for starters and the main course for dessert might be part of the fittest man in football’s secret, but his appetite for goals is simply insatiable.</p></td>
  </tr>
   </table> 
   <br><hr><br>
  </div>
<!-- GIf -->
    <img style="float: left; margin-left:150px;" src="images/ucl2.gif" alt="Snow">
    <img id="uclgif" style="float: right; margin-right:150px;" src="images/ucl1.gif" alt="Mountains">
<!-- /GIf -->

</div>
<br>
<!-- MIDDLECOLUMN -->
</div>
<!--/row -->

</body>
</html>