<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PL</title>
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
<img id="clbanner" src="images/plbanner.jpg" alt="Cinque Terre" width="1000" height="300">

<!-- row -->
<div class="row">
<!-- MIDDLECOLUMN -->
<div class="column middle" style="background-color:#bbb;">
<a href="index.php" class="button">
  &lt; &lt; Back
</a>
<div id="top"><img id="uclimage" style=" width: 380px; height:300px;" src="images/pllogo.png" alt="img"></div>

<h3 id="ucldescription">
The Premier League, also known as the English Premier League (legal name: The Football Association Premier League Limited), is the top level of the English football league system. Contested by 20 clubs, it operates on a system of promotion and relegation with the English Football League (EFL). Seasons typically run from August to May with each team playing 38 matches (playing all 19 other teams both home and away).[1] Most games are played on Saturday and Sunday afternoons.[2] There are occasions where broadcasters will air Monday Night Football and sometimes Friday night football.
<br><br>
The competition was founded as the FA Premier League on 20 February 1992 following the decision of clubs in the Football League First Division to break away from the Football League, founded in 1888, and take advantage of a lucrative television rights sale to Sky.[3] From 2019 to 2020, the league's accumulated television rights deals were worth around £3.1 billion a year, with Sky and BT Group securing the domestic rights to broadcast 128 and 32 games respectively.[4][5] The Premier League is a corporation where chief executive Richard Masters is responsible for its management, whilst the member clubs act as shareholders.[6] Clubs were apportioned central payment revenues of £2.4 billion in 2016–17, with a further £343 million in solidarity payments to English Football League (EFL) clubs.[7]
<br><br>
The Premier League is the most-watched sports league in the world, broadcast in 212 territories to 643 million homes and a potential TV audience of 4.7 billion people.[8][9] For the 2018–19 season, the average Premier League match attendance was at 38,181,[10] second to the German Bundesliga's 43,500,[11] while aggregated attendance across all matches is the highest of any association football league at 14,508,981.[12] Most stadium occupancies are near capacity.[13] The Premier League ranks first in the UEFA coefficients of leagues based on performances in European competitions over the past five seasons as of 2021.[14] The English top-flight has produced the second-highest number of UEFA Champions League/European Cup titles, with five English clubs having won fourteen European trophies in total.[15]
<br><br>
Fifty clubs have competed since the inception of the Premier League in 1992: forty-eight English and two Welsh clubs. Seven of them have won the title: Manchester United (13), Manchester City (6), Chelsea (5), Arsenal (3), Blackburn Rovers (1), Leicester City (1) and Liverpool (1).[16]


</h3>

<br>
<hr>
<h1 id="h11">Premier League Winners Last 10 Years:</h1>
<br>
<table id="table">
  <tr>
    <th>Season</th>
    <th>Winners</th>
    <th>Runners-up</th>
    <th>Points</th>
  </tr>
  <tr>
    <td>2021-22</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
  <tr>
    <td>2020-21</td>
    <td>Manchester City</td>
    <td>Manchester United</td>
    <td>86</td>
</tr>
<tr>
    <td>2019-20</td>
    <td>Liverpool</td>
    <td>Mancherter City</td>
    <td>99</td>
</tr>
<tr>
    <td>2018-19</td>
    <td>Mancity</td>
    <td>Liverpool</td>
    <td>98</td>
</tr>
<tr>
    <td>2017-18</td>
    <td>Manchester City</td>
    <td>Manchester United</td>
    <td>100</td>
</tr>
<tr>
    <td>2016-17</td>
    <td>Chelsea</td>
    <td>Tottenham Hotspur</td>
    <td>93</td>
</tr>
<tr>
    <td>2015-16</td>
    <td>Lieceter City</td>
    <td>Arsenal</td>
    <td>81</td>
</tr>
<tr>
    <td>2014-15</td>
    <td>Chelsea</td>
    <td>Manchester City</td>
    <td>87</td>
</tr>
<tr>
    <td>2013-14</td>
    <td>Manchester City</td>
    <td>Liverpool</td>
    <td>86</td>
</tr>
<tr>
    <td>2012-13</td>
    <td>Manchester United</td>
    <td>Manchester City</td>
    <td>89</td>
</tr>

</table><hr>
<h1 style="text-align: center; margin-top:20px;">Famous UCL Events...</h1>
<!-- PHOTOS -->
<div class="responsive">
  <div class="gallery">
      <img src="images/pfe1.jpg" alt="kdb" width="100%" height="100%">
    <div class="desc"><strong style="font-size: 18px;">Blackburn leave it late</strong><br>They might have been away from the big time for a while, but Blackburn actually won the Premier League three years after it started.

Ages before he was a regular in the Match of the Day studio, Alan Shearer was a goal machine who helped Rovers to become champion in 1994-95.

The title chase went down to the last game of the season, but despite Rovers losing to Liverpool they edged out rivals Manchester United to win what manager Kenny Dalglish called a “Cinderella Story.”</div>
  </div>
</div>

<div class="responsive">
<div class="gallery">
      <img src="images/pfe2.jpg" alt="kdb" width="100%" height="100%">
    <div class="desc"><strong style="font-size: 18px;">Kung-Fu Cantona</strong><br>One more from that season.

Eric Cantona had been red carded for kicking a Crystal Palace player during a game in January 1995. As he trudged off, one of the Selhurst Park fans shouted abuse at him and Cantona ran into the crowd to launch a flying kick at him.

He got a nine-month ban for what remains arguably the most shocking episode in Premier League history.</div>
  </div>
</div>
<div class="responsive">
<div class="gallery">
      <img src="images/pfe3.jpg" alt="kdb" width="100%" height="100%">
    <div class="desc"><strong style="font-size: 18px;">“I’d love it if we beat them”</strong><br>The Premier League title race was going to the wire in April 1996.

Kevin Keegan's Newcastle moved within three points of leaders Manchester United with a game in hand and two remaining.

Sir Alex Ferguson mischievously hinted that some opponents, such as Newcastle’s next fixture Nottingham Forest, tried harder against United than they did the Magpies.

In a TV interview, his voice cracking with emotion, Keegan unleashed an epic rant:

"You can tell him now, we're still fighting for this title and he's got to go to Middlesbrough and get something - and I'll tell you, honestly, I will love it if we beat them. Love it,” he said.

Newcastle only drew with Forest and United went on to win the title.</div>
  </div>
</div>

<div class="responsive">
<div class="gallery">
      <img src="images/pfe4.jpg" alt="kdb" width="100%" height="100%">
    <div class="desc"><strong style="font-size: 18px;">David Beckham scores from his own half</strong><br>With floppy hair and not a hint of designer stubble David Beckham looked more like his son Brooklyn on the opening day of the 1996/97 season.

And he was certainly not the household name he would become.

That started to change with one audacious swish of his right boot.

Becks, then 21, was just inside his own half when he spotted Wimbledon keeper Neil Sullivan off his line and decided to have a go.

It would be remembered as one of the Premier League’s most iconic strikes.</div>
  </div>
</div>
<!-- /PHOTOS -->

<div class="clearfix"></div>

<hr>

<h1 style="text-align:center">Premier League History</h1>

<h3 id="uclhistory">

Despite significant European success in the 1970s and early 1980s, the late 1980s marked a low point for English football. Stadiums were crumbling, supporters endured poor facilities, hooliganism was rife, and English clubs had been banned from European competition for five years following the Heysel Stadium disaster in 1985.[17] The Football League First Division, the top level of English football since 1888, was behind leagues such as Italy's Serie A and Spain's La Liga in attendances and revenues, and several top English players had moved abroad.[18]
<br><br>
By the turn of the 1990s, the downward trend was starting to reverse. At the 1990 FIFA World Cup, England reached the semi-finals; UEFA, European football's governing body, lifted the five-year ban on English clubs playing in European competitions in 1990, resulting in Manchester United lifting the UEFA Cup Winners' Cup in 1991. The Taylor Report on stadium safety standards, which proposed expensive upgrades to create all-seater stadiums in the aftermath of the Hillsborough disaster, was published in January 1990.[19]
<br><br>
During the 1980s, major English clubs had begun to transform into business ventures, applying commercial principles to club administration to maximise revenue. Martin Edwards of Manchester United, Irving Scholar of Tottenham Hotspur, and David Dein of Arsenal were among the leaders in this transformation.[20] The commercial imperative led to the top clubs seeking to increase their power and revenue: the clubs in Division One threatened to break away from the Football League, and in so doing they managed to increase their voting power and gain a more favourable financial arrangement, taking a 50% share of all television and sponsorship income in 1986.[20] They demanded that television companies should pay more for their coverage of football matches,[21] and revenue from television grew in importance. The Football League received £6.3 million for a two-year agreement in 1986, but by 1988, in a deal agreed with ITV, the price rose to £44 million over four years with the leading clubs taking 75% of the cash.[22][23] According to Scholar, who was involved in the negotiations of television deals, each of the First Division clubs received only around £25,000 per year from television rights before 1986, this increased to around £50,000 in the 1986 negotiation, then to £600,000 in 1988.[24] The 1988 negotiations were conducted under the threat of ten clubs leaving to form a "super league", but they were eventually persuaded to stay, with the top clubs taking the lion's share of the deal.[22][25][26] The negotiations also convinced the bigger clubs that in order to receive enough votes, they needed to take the whole of First Division with them instead of a smaller "super league".[27] By the beginning of the 1990s, the big clubs again considered breaking away, especially now that they had to fund the cost of stadium upgrade as proposed by the Taylor Report.[28]
<br><br>
In 1990, the managing director of London Weekend Television (LWT), Greg Dyke, met with the representatives of the "big five" football clubs in England (Manchester United, Liverpool, Tottenham Hotspur, Everton and Arsenal) over a dinner.[29] The meeting was to pave the way for a breakaway from The Football League.[30] Dyke believed that it would be more lucrative for LWT if only the larger clubs in the country were featured on national television and wanted to establish whether the clubs would be interested in a larger share of television rights money.[31] The five clubs agreed with the suggestion and decided to press ahead with it; however, the league would have no credibility without the backing of The Football Association, and so David Dein of Arsenal held talks to see whether the FA were receptive to the idea. The FA did not enjoy an amicable relationship with the Football League at the time and considered it as a way to weaken the Football League's position.[32] The FA released a report in June 1991, Blueprint for the Future of Football, that supported the plan for the Premier League with the FA as the ultimate authority that would oversee the breakaway league.[27]

</h3>
<hr>

<iframe  class="center2" width="560" height="315" src="https://www.youtube.com/embed/kW6CdIVxhAg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<hr>
<div class="T">
   <table style="width:100%; background-color: rgb(26, 26, 26);">
  <tr>
  <th style= "width:30%"></th>
  </tr>

    <tr>
  <td colspan="2">
  <h3 id="forbesh3">Premier League Top Scorers of All-Time </h3><h1 id="forbesh1">Since the Premier League's formation at the beginning of the 1992–93 season, a total of 33 players have scored 100 or more goals in the competition;
     collectively, these players are collectively referred to as the Premier League 100 Club.
      During the 1995–96 season, Alan Shearer became the first player to score 100 Premier League goals, and holds the record for the fewest games taken to reach the figure, doing so in 124 appearances.
       Additionally, he also holds the record for most goals scored in the Premier League with 260.
        Harry Kane is the second-fastest to 100 goals, doing so in 141 games.
     At 23 years and 133 days, Michael Owen was the youngest player to reach the 100 goal milestone.</h1>
  </td>  
  </tr>
  
  <tr>
  <td colspan="2">
  <h3 id="forbesh3">#1 | 260 Goals in 441 Apps</h3><h1 id="forbesh1">Alan Shearer</h1>
  </td>  
  </tr>
  <tr>
     <td><img src="images/as.png" width="215px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;"></p></td>
  </tr>
  <tr>
    <td colspan="2">
    <h3 id="forbesh3">#2 | 208 Goals in 491 Apps</h3><h1 id="forbesh1">Wayne Rooney</h1>
    </td>  
  </tr>
  <tr>
     <td><img src="images/wr.jpg" width="215px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;"></p></td>
  </tr>
  <tr>
    <td colspan="2">
    <h3 id="forbesh3">#3 | 187 Goals in 414 Apps</h3><h1 id="forbesh1">Andy Cole</h1></tr>
    </td>
  <tr>
     <td><img src="images/ac.jpg" width="215px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;"></p></td>
  </tr>
   </table> 
   <br><hr><br>
  </div>
<!-- GIf -->
    <img style="float: left; margin-left:150px; width:40% ; height:120%;" src="images/roll.gif" alt="Snow">
    <img id="uclgif" style="float: right; margin-right:150px;" src="images/plgif.gif" alt="Mountains">
<!-- /GIf -->

</div>
<br>
<!-- MIDDLECOLUMN -->
</div>
<!--/row -->

</body>
</html>