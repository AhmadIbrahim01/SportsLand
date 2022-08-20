<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBA</title>
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
</style>
<body>
<img id="clbanner" src="images/nbabanner.jpg" alt="Cinque Terre">

<!-- row -->
<div class="row">
<!-- MIDDLECOLUMN -->
<div class="column middle" style="background-color:#bbb;">
<a href="index.php" class="button">
  &lt; &lt; Back
</a>
<div id="top"><img id="uclimage" style=" width: 450px; height:270px;" src="images/nbalogo.png" alt="img"></div>

<h3 id="ucldescription">The National Basketball Association (NBA) is a professional basketball league in North America. The league is composed of 30 teams (29 in the United States and 1 in Canada) and is one of the major professional sports leagues in the United States and Canada. It is the premier men's professional basketball league in the world.[3]
<br><br>
The league was founded in New York City on June 6, 1946, as the Basketball Association of America (BAA).[1] It changed its name to the National Basketball Association on August 3, 1949, after merging with the competing National Basketball League (NBL).[4] In 1976, the NBA and the American Basketball Association (ABA) merged, adding four franchises to the NBA. The NBA's regular season runs from October to April, with each team playing 82 games. The league's playoff tournament extends into June. As of 2020, NBA players are the world's best paid athletes by average annual salary per player.[5][6][7]
<br><br>
The NBA is an active member of USA Basketball (USAB),[8] which is recognized by the FIBA (International Basketball Federation) as the national governing body for basketball in the United States. The league's several international as well as individual team offices are directed out of its head offices in Midtown Manhattan, while its NBA Entertainment and NBA TV studios are directed out of offices located in Secaucus, New Jersey. In North America, the NBA is the third wealthiest professional sport league after the National Football League (NFL) and Major League Baseball (MLB) by revenue, and among the top four in the world.[9]
<br><br>
The Boston Celtics and the Los Angeles Lakers are tied with the most NBA championships at 17 each. The Milwaukee Bucks are the defending league champions, as they defeated the Phoenix Suns 4–2 in the 2021 NBA Finals.

</h3>

<br>
<hr>
<h1 id="h11">NBA Championships Last 10 Years:</h1>
<br>
<table id="table">
  <tr>
    <th>Year</th>
    <th>Champion</th>
    <th>Runner-up</th>
    <th>Score</th>
  </tr>
  <tr>
    <td>2020-21</td>
    <td>Milwaukee Bucks</td>
    <td>Phoenix Suns</td>
    <td>4-2</td>
</tr>
<tr>
    <td>2019-20</td>
    <td>Los Angeles Lakers</td>
    <td>Miami Heat</td>
    <td>4-2</td>
</tr>
<tr>
    <td>2018-19</td>
    <td>Toronto Raptors</td>
    <td>Golden State Warriors</td>
    <td>4-2</td>
</tr>
<tr>
    <td>2017-18</td>
    <td>Golden State Warriors</td>
    <td>Cleveland Cavaliers</td>
    <td>4-0</td>
</tr>
<tr>
    <td>2016-17</td>
    <td>Golden State Warriors</td>
    <td>Cleveland Cavaliers</td>
    <td>4-1</td>
</tr>
<tr>
    <td>2015-16</td>
    <td>Cleveland Cavaliers</td>
    <td>Golden State Warriors</td>
    <td>4-3</td>
</tr>
<tr>
    <td>2014-15</td>
    <td>Golden State Warriors</td>
    <td>Cleveland Cavaliers</td>
    <td>4-2</td>
</tr>
<tr>
    <td>2013-14</td>
    <td>San Antonio Spurs</td>
    <td>Miami Heat</td>
    <td>4-1</td>
</tr>
<tr>
    <td>2012-13</td>
    <td>Miami Heat</td>
    <td>San Antonio Spurs</td>
    <td>4-3</td>
</tr>
<tr>
    <td>2011-12</td>
    <td>Miami Heat</td>
    <td>Oklahoma City Thunder</td>
    <td>4-1</td>
</tr>
</table><hr>
<h1 style="text-align: center; margin-top:20px;">Famous NBA Events...</h1>
<!-- PHOTOS -->
<div class="responsive">
  <div class="gallery">
      <img src="images/nfe1.jpg" alt="kdb" width="100%" height="100%">
    <div class="desc"><strong style="font-size: 18px;">“The Block”</strong><br>After years of heckling and what seemed like true hatred, <a href="/basketball/players/lebron-james/">LeBron James</a> finally made it up to Cleveland fans in 2016. After going down 3 to 1 in the <a href="/basketball/what-is-nba/">NBA</a> Finals against the 73-9 Warriors, James (with some help from Kyrie Irving) dragged his team back, and he gave them the last jolt they needed with “The Block.” On a <a href="/basketball/strategy/2-on-1/">2-on-1</a> with two <a href="/basketball/coaching/minutes/">minutes</a> remaining, Curry passed the ball to Andre Iguodala on what seemed to be an easy <a href="/basketball/shot-types/lay-up/">layup</a> before LeBron came out of nowhere to pin the ball on the backboard with ESPN’s Mike Breen in disbelief saying “Oh! Blocked by James!”&nbsp;After Kyrie’s shot and Kevin Love’s stop, the Cavs won and brought Cleveland its first championship in any sport in over fifty years.</div>
</div>
</div>

<div class="responsive">
<div class="gallery">
      <img src="images/nfe2.jpg" alt="kdb" width="100%" height="100%">
    <div class="desc"><strong style="font-size: 18px;">“The Shot”</strong><br>Michael Jordan has ample moments to choose from for this list, but his shot over Craig Ehlo in the first round of the Eastern Conference Playoffs between the Chicago Bulls and Cleveland Cavaliers in 1989 tops them all. With two seconds left while being mauled by Larry Nance, Jordan somehow got free. He then made a jumping mid-range shot over Craig Ehlo, which is also Craig Ehlo’s most iconic moment of his career despite Ehlo’s quality career, to give the Bulls a 3-2 series lead and help the Bulls move on. The celebration is just as iconic as the actual shot with Jordan jumping high in the air fist-pumping and showing the competitive streak that is now well-known from MJ.</div>
  </div>
</div>
<div class="responsive">
<div class="gallery">
      <img src="images/nfe3.jpg" alt="kdb" width="100%" height="100%">
    <div class="desc"><strong style="font-size: 18px;">Ray Allen’s Three-Pointer</strong><br>While LeBron has definitely done enough on his own to establish himself as one of the greatest <a href="/basketball/players/">basketball players</a> of all <a href="/basketball/101/clocks-and-time/">time</a>, he has Ray Allen and Chris Bosh to thank for keeping his Miami Heat alive in the 2013 NBA Finals. With 15 seconds left, losing by three, and down 3-2 to the San Antonio Spurs in the series, James missed a three-pointer, and a <a href="/basketball/stats/rebounds/">rebound</a> would have most likely won the Finals for the Spurs. Instead, Bosh rebounded the ball and passed it out to legendary sharpshooter Ray Allen who made a heavily contested three pointer to send the game to <a href="/basketball/101/overtime/">overtime</a>.&nbsp;The Heat won in overtime and then also won in Game 7, giving LeBron his second championship at the time.</div>
  </div>
</div>

<div class="responsive">
<div class="gallery">
      <img src="images/nfe4.jpg" alt="kdb" width="100%" height="100%">
    <div class="desc"><strong style="font-size: 18px;">Wilt Chamberlain’s 100-Point Game</strong><br>One of the first truly memorable moments of the NBA, Wilt Chamberlain of the Philadelphia Warriors somehow broke <a href="/basketball/stats/what-is-a-triple-double/">triple</a> digits in a late regular season game against a struggling New York Knicks team. Chamberlain, who was notorious for ranking individual accomplishments over team accomplishments, greatly outmatched anyone else on <a href="/basketball/the-court/">the court</a> with his size and skill. Wilt took 63 shots and went 28-32 from the <a href="/basketball/the-court/free-throw-line/">free throw line</a>.&nbsp;His teammates helped propel him to this feat by constantly <a href="/basketball/strategy/feeding/">feeding</a> him the ball. The photo of him <a href="/basketball/fouls/holding/">holding</a> a piece of paper with the number 100 on it is etched into the <a href="/basketball/101/history/">history</a> of both the NBA and <a href="/sports/">sports</a> in general.</div>
  </div>
</div>
<!-- /PHOTOS -->

<div class="clearfix"></div>

<hr>

<h1 style="text-align:center">NBA History</h1>

<h3 id="uclhistory">
The Basketball Association of America was founded in 1946 by owners of the major ice hockey arenas in the Northeastern and Midwestern United States and Canada. On November 1, 1946, in Toronto, Ontario, Canada, the Toronto Huskies hosted the New York Knickerbockers at Maple Leaf Gardens, in a game the NBA now refers to as the first game played in NBA history.[10] The first basket was made by Ossie Schectman of the Knickerbockers. Although there had been earlier attempts at professional basketball leagues, including the American Basketball League and the NBL, the BAA was the first league to attempt to play primarily in large arenas in major cities. During its early years, the quality of play in the BAA was not significantly better than in competing leagues or among leading independent clubs such as the Harlem Globetrotters. For instance, the 1948 ABL finalist Baltimore Bullets moved to the BAA and won that league's 1948 title, and the 1948 NBL champion Minneapolis Lakers won the 1949 BAA title. Prior to the 1948–49 season, however, NBL teams from Fort Wayne, Indianapolis, Minneapolis, and Rochester jumped to the BAA, which established the BAA as the league of choice for collegians looking to turn professional.[11]
<br><br>
On August 3, 1949, the remaining NBL teams–Syracuse, Anderson, Tri-Cities, Sheboygan, Denver, and Waterloo–merged into the BAA. In deference to the merger and to avoid possible legal complications, the league name was changed to the present National Basketball Association, even though the merged league retained the BAA's governing body, including Maurice Podoloff as president.[11] To this day, the NBA claims the BAA's history as its own. It now reckons the arrival of the NBL teams as an expansion, not a merger, and does not recognize NBL records and statistics.[12]
<br><br>
The new league had seventeen franchises located in a mix of large and small cities,[13] as well as large arenas and smaller gymnasiums and armories. In 1950, the NBA consolidated to eleven franchises, a process that continued until 1953–54, when the league reached its smallest size of eight franchises: the New York Knicks, Boston Celtics, Philadelphia Warriors, Minneapolis Lakers, Rochester Royals, Fort Wayne Pistons, Tri-Cities Blackhawks, and Syracuse Nationals, all of which remain in the league today, although the latter six all did eventually relocate. The process of contraction saw the league's smaller-city franchises move to larger cities. The Hawks shifted from the Tri-Cities to Milwaukee in 1951, and then to St. Louis in 1955. The Rochester Royals moved from Rochester, New York, to Cincinnati in 1957 and the Pistons moved from Fort Wayne, Indiana, to Detroit in 1957.
Japanese-American Wataru Misaka broke the NBA color barrier in the 1947–48 season when he played for the New York Knicks. He remained the only non-white player in league history prior to the first African-American, Harold Hunter, signing with the Washington Capitols in 1950.[14][15] Hunter was cut from the team during training camp,[14][16] but several African-American players did play in the league later that year, including Chuck Cooper with the Celtics, Nathaniel "Sweetwater" Clifton with the Knicks, and Earl Lloyd with the Washington Capitols. During this period, the Minneapolis Lakers, led by center George Mikan, won five NBA Championships and established themselves as the league's first dynasty.[17] To encourage shooting and discourage stalling, the league introduced the 24-second shot clock in 1954.[18] If a team does not attempt to score a field goal (or the ball fails to make contact with the rim) within 24 seconds of obtaining the ball, play is stopped and the ball given to its opponent.
</h3>
<hr>
<h1 style="text-align:center">NBA Anthem</h1>

<h3 id="uclanthem">

When was the Star-Spangled Banner recognized as the national anthem? The Star-Spangled Banner was recognized for its official use in the U.S. Navy by President Woodrow Wilson in 1916. The song was deemed the American national anthem through a congressional resolution that President Herbet Hoover signed in 1931.

</h3>
<iframe class="center2" width="560" height="315" src="https://www.youtube.com/embed/CMA2iF6RuXk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><hr>
<div class="T">
   <table style="width:100%; background-color: rgb(26, 26, 26);">
  <tr>
  <th style= "width:30%"></th>
  </tr>

    <tr>
  <td colspan="2">
  <h3 id="forbesh3">The 3 Greatest Basketball Players of All Time</h3><h1 id="forbesh1"></h1>
  </td>  
  </tr>
  
  <tr>
  <td colspan="2">
  <h3 id="forbesh3">#1</h3><h1 id="forbesh1">Michael Jordan</h1>
  </td>  
  </tr>
  <tr>
     <td><img src="images/nba1.jpg" width="400px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;">Cristiano became the first player to reach 100 Champions League goals in Real Madrid’s 4-2 win over Bayern in April 2017. It would take Messi another 11 months to get to three figures.

As it stands, Cristiano is on 140 goals in the Champions League and Messi is 15 behind on 125 although both are still active and at new clubs, although neither featuring past the round of 16 this season.</p></td>
  </tr>
  <tr>
    <td colspan="2">
    <h3 id="forbesh3">#2</h3><h1 id="forbesh1">LeBron James</h1>
    </td>  
  </tr>
  <tr>
     <td><img src="images/nba2.jpg" width="400px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;">Lionel Messi left Barcelona for Paris Saint-Germain in the summer of 2021 having scored 120 goals for the Spanish club in the UEFA Champions League – a record that even Cristiano Ronaldo, with his 105 for Madrid, could not challenge, although the Portuguese phenomenon reached the 100 mark for his club first.</p></td>
  </tr>
  <tr>
    <td colspan="2">
    <h3 id="forbesh3">#3</h3><h1 id="forbesh1">Kareem Abdul-Jabbar</h1></tr>
    </td>
  <tr>
     <td><img src="images/nba3.jpg" width="400px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;">In the decade since arriving in Germany from Lech Poznan, Lewy has never missed more than six consecutive games with injury. Dessert for starters and the main course for dessert might be part of the fittest man in football’s secret, but his appetite for goals is simply insatiable.</p></td>
  </tr>
   </table> 
   <br><hr><br>
  </div>
<!-- GIf -->
    <img style="float: left; margin-left:150px;" src="images/nbagif.gif" alt="Snow">
    <img id="uclgif" style="float: right; margin-right:150px;" src="images/nbagif1.gif" alt="Mountains">
<!-- /GIf -->

</div>
<br>
<!-- MIDDLECOLUMN -->
</div>
<!--/row -->
</div>
</body>
</html>