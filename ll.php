<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaLiga</title>
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
<img id="clbanner" src="images/llbanner2.jpg" alt="Cinque Terre" style="width: 100%; height: 560px; object-fit: cover;">

<!-- row -->
<div class="row">
<!-- MIDDLECOLUMN -->
<div class="column middle" style="background-color:#bbb;">
<a href="index.php" class="button">
  &lt; &lt; Back
</a>
<div id="top"><img id="uclimage" style="width: 180px; height:220px;" src="images/logoll.png" alt="img"></div>

<h3 id="ucldescription">
The Campeonato Nacional de Liga de Primera División,[a] commonly known simply as Primera División in Spain, and as La Liga[b] in English-speaking countries and officially as LaLiga Santander for sponsorship reasons,[2] stylized as LaLiga, is the men's top professional football division of the Spanish football league system.[3] Administered by the Liga Nacional de Fútbol Profesional,[c] it is contested by 20 teams, with the three lowest-placed teams at the end of each season being relegated to the Segunda División and replaced by the top two teams and a play-off winner in that division.
<br><br>
Since its inception, a total of 62 teams have competed in La Liga. Nine teams have been crowned champions, with Barcelona winning the inaugural La Liga and Real Madrid winning the title a record 35 times, most recently in the 2021–22 season. During the 1940s Valencia, Atlético Madrid and Barcelona emerged as the strongest clubs, winning several titles. Real Madrid and Barcelona dominated the championship in the 1950s, each winning four La Liga titles during the decade. During the 1960s and 1970s, Real Madrid dominated La Liga, winning fourteen titles, with Atlético Madrid winning four.[4] During the 1980s and 1990s Real Madrid were prominent in La Liga, but the Basque clubs of Athletic Club and Real Sociedad had their share of success, each winning two Liga titles. From the 1990s onward, Barcelona have dominated La Liga, winning sixteen titles to date.[5] Although Real Madrid has been prominent, winning ten titles, La Liga has also seen other champions, including Atlético Madrid, Valencia, and Deportivo La Coruña.
<br><br>
According to UEFA's league coefficient rankings, La Liga has been the top league in Europe in each of the seven years from 2013 to 2019 (calculated using accumulated figures from five preceding seasons) and has led Europe for 22 of the 60 ranked years up to 2019, more than any other country. It has also produced the continent's top-rated club more times (22) than any other league in that period, more than double that of second-placed Serie A (Italy), including the top club in 10 of the 11 seasons between 2009 and 2019; each of these pinnacles was achieved by either Barcelona or Real Madrid. La Liga clubs have won the most UEFA Champions League (19), UEFA Europa League (13), UEFA Super Cup (15), and FIFA Club World Cup (7) titles, and its players have accumulated the highest number of Ballon d'Or awards (23), The Best FIFA Men's Player awards including FIFA World Player of the Year (19), and UEFA Men's Player of the Year awards including UEFA Club Footballer of the Year (11).
<br><br>
La Liga is one of the most popular professional sports leagues globally, with an average attendance of 26,933 for league matches in the 2018–19 season.[6] This is the eighth-highest of any domestic professional sports league in the world and the third-highest of any professional association football league in the world, behind the Bundesliga and the Premier League, and above the other two so-called "Big Five" European leagues, Serie A and Ligue 1.[7][8] La Liga is also the sixth wealthiest professional sports league in the world by revenue, after the NFL, MLB, the NBA, the Premier League, and the NHL.[9]
</h3>

<br>
<hr>
<h1 id="h11">LaLiga Winners Last 10 Years:</h1>
<br>
<table id="table">
  <tr>
    <th>Season</th>
    <th>Winners</th>
    <th>Runner-up</th>
    <th>Points</th>
  </tr>
  <tr>
    <td>2021-22</td>
    <td>Real Madrid</td>
    <td>Barcelona</td>
    <td>86</td>
  </tr>
  <tr>
    <td>2020-21</td>
    <td>Atletico Madrid</td>
    <td>Real Madrid</td>
    <td>86</td>
</tr>
<tr>
    <td>2019-20</td>
    <td>Real Madrid</td>
    <td>Barcelona</td>
    <td>87</td>
</tr>
<tr>
    <td>2018-19</td>
    <td>Barcelona</td>
    <td>Atletico Madrid</td>
    <td>87</td>
</tr>
<tr>
    <td>2017-18</td>
    <td>Barcelona</td>
    <td>Atletico Madrid</td>
    <td>93</td>
</tr>
<tr>
    <td>2016-17</td>
    <td>Real Madrid</td>
    <td>Barcelona</td>
    <td>93</td>
</tr>
<tr>
    <td>2015-16</td>
    <td>Barcelona</td>
    <td>Real Madrid</td>
    <td>91</td>
</tr>
<tr>
    <td>2014-15</td>
    <td>Barcelona</td>
    <td>Real Madrid</td>
    <td>94</td>
</tr>
<tr>
    <td>2013-14</td>
    <td>Atletico Madrid</td>
    <td>Barcelona</td>
    <td>90</td>
</tr>
<tr>
    <td>2012-13</td>
    <td>Barcelona</td>
    <td>Real Madrid</td>
    <td>100</td>
</tr>

</table><hr>
<h1 style="text-align: center; margin-top:20px;">Famous LaLiga Events...</h1>
<!-- PHOTOS -->
<div class="responsive">
<div class="gallery">
      <img src="images/llfe4.jpg" alt="kdb" width="100%" height="100%">
    <div class="desc"><strong style="font-size: 18px;">Messi’s first hat-trick against Real Madrid</strong><br>Ruud Van Nistelrooy started the proceedings at Camp Nou in the 2006-2007 season. But it was Lionel Messi who scored the last goal of the game. Despite the presence of Barcelona legends such as Ronaldinho and Xavi in the game. It was the Argentine who grabbed all the headlines after the game.
<br>
The score was 3-2 in Madrid’s favor with a brace from Nistelrooy and Messi on the scoreboard. Also, Barcelona was down to 10 men due to a red card handed over to Oleguer Presas early in the game. The Argentinian went on to complete his hat-trick in stoppage time and the game ended at 3-3. The third goal of Messi came from a pass of Ronaldinho right outside the box. The Barcelona forward then went past three defenders before putting it past Iker Casillas.
<br>
Messi was 19-year-old during this game and then he went on to thrive at the club. Now, the Argentinian is the highest goal scorer in El Clasico with 17 goals scored in La Liga and 25 goals across all competitions. This game was one of the signs of Messi(ah)’s arrival.</div>
  </div>
</div>


<div class="responsive">
<div class="gallery">
      <img src="images/llfe2.jpg" alt="kdb" width="100%" height="100%">
    <div class="desc"><strong style="font-size: 18px;">Di Stéfano’s first El Clásico</strong><br>This moment enters our list primarily because of the wild manner in which Di Stefano ended up at Los Blancos.
<br>
Alfredo di Stéfano’s transfer to Real Madrid is still considered as one of the most controversial transfers in the football history. The Blond Arrow impressed both Real Madrid and Barcelona while playing on loan for Colombian club named Millonarios. The confusion occurred when both Los Blancos and the Catalans came to know that they both have paid them for the same striker but to two different clubs. Barcelona paid 4 million pesetas to River Plate and Real Madrid paid 1.5 million pesetas to the Colombian club.
</div>
  </div>
</div>
<div class="responsive">
<div class="gallery">
      <img src="images/llfe3.jpg" alt="kdb" width="100%" height="100%">
    <div class="desc"><strong style="font-size: 18px;">Figo’s first visit to Camp Nou in Madrid color</strong><br>The transfer of Luis Figo from Barcelona to arch-rivals Real Madrid wasn’t the smoothest, all things considered. Figo made his name at Barcelona and was considered as one of the best in the world before his move to the Santiago Bernabéu. The Portuguese midfielder scored 45 goals in 246 appearances for the Catalans across all competitions. In addition, the former Real Madrid midfielder also helped the Camp Nou outfit in winning two consecutive La Liga titles and two Copa del Reys. 
  <br>
  Later, when Figo went on to play against Barcelona in 2002 El Clásico. The fans were furious with the transfer saga and took out their anger at the Portuguese. Figo was taking the corner kick and fans started throwing whiskey bottles, food, and worst of all, someone threw a pig’s head. After this Real Madrid players went off the field with the game being stopped for some time. The players were back on the field after the crowd mellowed and the match ended at 0-0.
  </div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
      <img src="images/llfe1.jpg" alt="kdb" width="100%" height="100%">
    <div class="desc"><strong style="font-size: 18px;">Messi makes history</strong><br>The Argentine became the all-time top scorer in La Liga history after overtaking Zarra's tally during his side's win over Sevilla.</div>
  </div>
</div>

<!-- /PHOTOS -->

<div class="clearfix"></div>

<hr>

<h1 style="text-align:center">LaLiga History</h1>

<h3 id="uclhistory">
In April 1928, José María Acha, a director at Getxo, first proposed the idea of a national league in Spain. After much debate about the size of the league and who would take part, the Real Federación Española de Fútbol eventually agreed on the ten teams who would form the first Primera División in 1929. Barcelona, Real Madrid, Athletic Club, Real Sociedad, Getxo, and Real Unión were all selected as previous winners of the Copa del Rey. Atlético Madrid, Espanyol, and Europa qualified as Copa del Rey runners-up and Racing de Santander qualified through a knockout competition. Only three of the founding clubs (Real Madrid, Barcelona, and Athletic Club) have never been relegated from the Primera División.
</h3>
<hr>
<h1 style="text-align:center">LaLiga Anthem</h1>


<iframe class="center2" width="560" height="315" src="https://www.youtube.com/embed/7xgLJDV7gmw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><hr>
<div class="T">
   <table style="width:100%; background-color: rgb(26, 26, 26);">
  <tr>
  <th style= "width:30%"></th>
  </tr>

    <tr>
  <td colspan="2">
  <h3 id="forbesh3">LaLiga Top Scorers of All-Time </h3><h1 id="forbesh1">La Liga all-time top scorer is Lionel Messi with 474 goals, all for Barcelona. 
    He also holds the record for most goals scored in a single season with 50 in the 2011–12 campaign, 
    and is the only player ever to win the league's top scorer award in eight different seasons.
     Athletic Bilbao's Telmo Zarra, who was the competition's all-time top scorer until 2014, won the top scorer award six times.
      Four other players — Real Madrid's Alfredo Di Stéfano, Quini of Sporting Gijón and Barcelona,
     and Hugo Sánchez of Atlético Madrid and 
     Real Madrid — each finished as top scorer in five individual seasons.</h1>
  </td>  
  </tr>
  
  <tr>
  <td colspan="2">
  <h3 id="forbesh3">#1 | 474 Goals</h3><h1 id="forbesh1">Lionel Messi</h1>
  </td>  
  </tr>
  <tr>
     <td><img src="images/mell.jpg" width="215px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;"></p></td>
  </tr>
  <tr>
    <td colspan="2">
    <h3 id="forbesh3">#2 | 311 Goals</h3><h1 id="forbesh1">Cristiano Ronaldo</h1>
    </td>  
  </tr>
  <tr>
     <td><img src="images/rll.jpg" width="215px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;"></p></td>
  </tr>
  <tr>
    <td colspan="2">
    <h3 id="forbesh3">#3 | 251 Goals</h3><h1 id="forbesh1">Telmo Zarra</h1></tr>
    </td>
  <tr>
     <td><img src="images/tz.jpeg" width="215px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;"></p></td>
  </tr>
   </table> 
   <br><hr><br>
  </div>
<!-- GIf -->
    <img id="uclgif" style="float: left; margin-left:150px;" src="images/lagif.gif" alt="Snow">
    <img id="uclgif" style="float: right; margin-right:150px;" src="images/lagif2.gif" alt="Mountains">
<!-- /GIf -->

</div>
<br>
<!-- MIDDLECOLUMN -->
</div>
<!--/row -->

</body>
</html>