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
<img id="clbanner" src="images/rfbanner.jpg" alt="Cinque Terre" width="1000" height="300">

<!-- row -->
<div class="row">
<!-- MIDDLECOLUMN -->
<div class="column middle" style="background-color:#bbb;">
<a href="index.php" class="button">
  &lt; &lt; Back
</a>
<div id="top"><img id="uclimage" style=" width: 250px; height:250px;" src="images/wmlogo1.png" alt="img"></div>

<h3 id="ucldescription">
The Championships, Wimbledon, commonly known simply as Wimbledon or The Championships, is the oldest tennis tournament in the world and is widely regarded as the most prestigious.[2][3][4][5][6] It has been held at the All England Club in Wimbledon, London since 1877 and is played on outdoor grass courts, with retractable roofs over the two main courts since 2019.
  <br><br>
  Wimbledon is one of the four Grand Slam tennis tournaments, the others being the Australian Open, the French Open, and the US Open. Wimbledon is the only major still played on grass, which is the traditional tennis playing surface.
  <br><br>
  The tournament traditionally took place over two weeks in late June and early July, starting on the last Monday in June and culminating with the Ladies' and Gentlemen's Singles Finals, scheduled for the Saturday and Sunday at the end of the second week. However, changes to the tennis calendar in 2015 have seen the event moved back by a week to begin in early July.[7][8] Five major events are held each year, with additional junior and invitational competitions also taking place.
  <br><br>
  Wimbledon traditions include a strict all-white dress code for competitors, and royal patronage. Strawberries and cream are traditionally consumed at the tournament.[9] The tournament allows advertising around the courts only by the official sponsors, which are Rolex, which provides timekeeping technology during matches, IBM, Oppo, Slazenger, and Robinsons barley water.
<br><br>
In 2009, Wimbledon's Centre Court was fitted with a retractable roof to lessen the loss of playing time due to rain. A roof was operational over No. 1 Court from 2019,[10] when a number of other improvements were made, including adding cushioned seating, a table and 10 independently operable cameras per court to capture the games.
<br><br>
Due to the COVID-19 pandemic, the 2020 Championships were cancelled, the first cancellation of the tournament since World War II.[11] The rescheduled 134th edition was staged from 28 June 2021 to 11 July 2021, following from the 2020 cancellation. The 135th edition is scheduled to take place between 27 June 2022 and 10 July 2022, with regularly scheduled play on the middle Sunday expected for the first time. The 135th edition will also mark the centenary of the inaugural championships staged at the Centre Court.
</h3>

<br>
<hr>
<h1 id="h11">UCL Winners Last 10 Years:</h1>
<br>
<table id="table">
  <tr>
    <th>Year</th>
    <th>Winners</th>
    <th>Runner-up</th>
    <th>Score</th>
  </tr>
  <tr>
    <td>2021</td>
    <td>Novak Djokovic (Serbia)	</td>
    <td>Matteo Berrettini (Italy)</td>
    <td>6–7(4–7), 6–4, 6–4, 6–3</td>
  </tr>
  <tr>
    <td>2020 (Cancelled)</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
</tr>
<tr>
    <td>2019</td>
    <td>Novak Djokovic (Serbia)</td>
    <td>Roger Federer (Switzerland)</td>
    <td>7–6(7–5), 1–6, 7–6(7–4), 4–6, 13–12(7–3)</td>
</tr>
<tr>
    <td>2018</td>
    <td>Novak Djokovic (Serbia)	</td>
    <td>Kevin Anderson (South Africa)</td>
    <td>6–2, 6–2, 7–6(7–3)</td>
</tr>
<tr>
    <td>2017</td>
    <td>Roger Federer (Switzerland)	</td>
    <td>Marin Čilić (Croatia)</td>
    <td>6–3, 6–1, 6–4</td>
</tr>
<tr>
    <td>2016</td>
    <td>Andy Murray (UK)</td>
    <td>Milos Raonic (Canada)</td>
    <td>6–4, 7–6(7–3), 7–6(7–2)</td>
</tr>
<tr>
    <td>2015</td>
    <td>Novak Djokovic (Serbia)</td>
    <td>Roger Federer (Switzerland)</td>
    <td>7–6(7–1), 6–7(10–12), 6–4, 6–3</td>
</tr>
<tr>
    <td>2014-15</td>
    <td>Novak Djokovic (Serbia)</td>
    <td>Roger Federer (Switzerland)</td>
    <td>6–7(7–9), 6–4, 7–6(7–4), 5–7, 6–4</td>
</tr>
<tr>
    <td>2013</td>
    <td>Andy Murray (UK)</td>
    <td>Novak Djokovic (Serbia)</td>
    <td>6-4, 7-5, 6-4</td>
</tr>
<tr>
    <td>2012</td>
    <td>Roger Federer (Switzerland)</td>
    <td>Andy Murray (UK)</td>
    <td>4–6, 7–5, 6–3, 6–4</td>
</tr>

</table><hr>
<h1 style="text-align: center; margin-top:20px;">Famous Wimbledon Events...</h1>
<!-- PHOTOS -->
<div class="responsive">
  <div class="gallery">
      <img src="images/wf1.jpg" alt="Messi" width="100%" height="100%">
    </a>
    <div class="desc">
    <strong style="font-size: 18px;">The Borg-McEnroe Tiebreaker, 1980</strong><br><br>
    The 18-16, fourth-set tiebreaker in the 1981 Wimbledon final may have been the most riveting 22 minutes in tennis history.
<br><br>
    The contrasting styles and personalities of the participants made it an enthralling matchup from the start: No. 1-ranked Bjorn Borg—the cool, stoic Swede with the breathtaking groundstrokes—was up against No. 2-ranked John McEnroe—the loud, combative American with the masterful serve-and-volley game. The appeal of the Borg-McEnroe matchup went far beyond the confines of the tennis world.
<br><br>
After McEnroe cruised through the first set, Borg won the next two and let a double match point slip away while serving at 5-4, 40-15 in the fourth set. Each held serve one more time to force the tiebreaker.
<br><br>
The drama already present when the tiebreaker began seemed to build with each point, as the decider went on and on. The pair changed sides five times during the tiebreaker, and they even forgot to change when it hit 15-15. You could feel the tension in the crowd increase with every winner and every error. 
<br><br>
Borg had five match points in the tiebreaker and McEnroe had six set points before he captured the fourth set on his seventh set-point opportunity when Borg netted an easy forehand volley.
<br><br>
Despite losing the 34-point tiebreaker, Borg rallied to win the fifth set and the match 1-6, 7-5, 6-3, 6-7 (16-18), 8-6 for his fifth straight Wimbledon crown. Borg was just a month past his 24th birthday and he had just won his 10th Grand Slam singles title. Astonishingly, he would win just one more major, the 1981 French Open.
<br><br>
It is worth noting that the dramatic 1980 tiebreaker that defined the Borg-McEnroe rivalry could not have occurred in the fifth set, as Wimbledon does not utilize a tiebreaker in the fifth set of men's matches.
<br><br>
Whether the 1980 final was the greatest Wimbledon match in history is open for debate, but the legend of that 22-minute tiebreaker stands alone.


    </div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
      <img src="images/wf2.jpg" alt="Bayern" width="600" height="400">
    </a>
    <div class="desc">
    <strong style="font-size: 18px;">The Nadal-Federer Classic, 2008</strong><br><br>
    Often called the greatest tennis match in history, Rafael Nadal's 6-4, 6-4, 6-7 (5-7), 6-7 (8-10), 9-7 victory over Roger Federer in the 2008 Wimbledon final featured the added dramatic elements of two rain delays and a finish that was shrouded in darkness.
<br><br>
ESPN proclaimed it the most memorable Wimbledon final in the Open Era, and L. Jon Wertheim wrote a book about it titled, Strokes of Genius: Federer, Nadal, and Greatest Match Ever Played.
<br><br>
The drama for the 2008 match had been building for two years. Federer beat Nadal in four sets in the 2006 Wimbledon final and outlasted him again in five riveting sets at the All England Club climax in 2007.
<br><br>
As the New York Times noted after the 2008 epic, "Last year’s emotional tussle immediately took its place among the best Wimbledon finals, but this five-set classic—played on a rainy, gusty day—was better yet."
<br><br>
Heading into the 2008 final, Federer had not lost a match at the All England Club since 2002 and was shooting for his sixth straight Wimbledon crown. Nadal, already known as the king of clay, had been getting better on grass year by year and was finally in position to beat the man who had ruled grass-court tennis for years.
The tennis was of the highest caliber as the No. 1 and 2 players in the world tried to establish dominance with their contrasting styles. In the engrossing fourth-set tiebreaker, Federer fought off a pair of match points against him, the latter on a breathtaking backhand passing shot.
<br><br>
Federer won the tiebreaker 10-8 to even the match, but Nadal ultimately prevailed to earn his first Wimbledon title.
<br><br>
The match lasted four hours and 48 minutes, the longest singles final in Wimbledon history, and ended at 9:16 p.m. local time. By then darkness was starting to descend on the Centre Court, and there was little natural light for the award ceremonies as the flash bulbs of cameras illuminated the night. 






</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <img src="images/wf3.jpg" alt="Salah" width="600" height="400">
    </a>
    <div class="desc">
    <strong style="font-size: 18px;">Ashe's Upset, 1975</strong><br><br>
    Jimmy Connors was considered almost unbeatable in 1975, especially on grass. He had beaten Ken Rosewall in the final of the 1974 Wimbledon 6-1, 6-1, 6-4 and had crushed Rosewall again in the final of the 1974 U.S. Open (then played on grass) 6-1, 6-0, 6-1.
<br><br>
Although he had lost in the final of the 1975 Australian Open to John Newcombe, the top-seeded, 22-year-old Connors was at the top of his game at Wimbledon that year, reaching the final without the loss of a set.

<br><br>
Meanwhile, the 31-year-old Arthur Ashe seemed to be past his prime. He had won the 1968 U.S. Open and the 1970 Australian Open but had not gone past the quarterfinals of a major since reaching the final of the 1972 U.S. Open.

<br><br>
Ashe, the No. 6 seed, made his way to the 1975 Wimbledon final, but it had been a struggle. He had to go five sets to get past No. 16-seeded Tony Roche in the semifinals.

<br><br>
Not only was Connors an overwhelming favorite against Ashe, but Connors was a prohibitive 9-10 favorite to win in straight sets, according to an ESPN.com article on the match.

<br><br>
Adding to the flavor of the match was the fact that the quiet, gentlemanly Ashe and the young, brash Connors were not friends. Just two weeks earlier, Connors had announced a $5 million libel suit against Ashe for criticizing Connors' decision not to play for the U.S. Davis Cup team.

<br><br>
Connors was expected to take his anger out on Ashe, who wore his USA Davis Cup jacket during the warm-up for the match.

<br><br>
However, Ashe had a strategy that minimized Connors' effectiveness. Ashe used dinks, chips, lobs and short angles to blunt Connors' powerful groundstrokes.

    </div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <img src="images/wf4.jpg" alt="RealMadrid" width="600" height="400">
    </a>
    <div class="desc">
    <strong style="font-size: 18px;">You Cannot Be Serious, 1981</strong><br><br>
    It's not poetry worthy of Frost or Whitman, but John McEnroe's outburst directed at the elderly chair umpire during a 1981 Wimbledon first-round match may be the most famous on-court quote in tennis history.

<br><br>
"You can't be serious, man. YOU CANNOT BE SERIOUS. That ball was on the line. Chalk flew up. It was clearly in. How can you possibly call that out? He's walking over. Everybody knows it's in in the whole stadium. And you call it out? (Pause) You guys are the absolute pits of the world, you know that?"


<br><br>
Chair umpire Edward James hit McEnroe with a penalty point.


<br><br>
That tirade obscured the fact that McEnroe would go on to win the Wimbledon title that year, beating Bjorn Borg in the final to end Borg's five-year run as champion.


<br><br>
Trivia question: Who was McEnroe's opponent in that first-round match? Only the dedicated tennis fan knows it was Tom Gullikson, who would lose the match in straight sets.

<br><br>
A 2011 story in the Telegraph reported that fans in 2010 voted McEnroe's rant as their top Wimbledon moment of all time.
</div>
  </div>
</div>
<!-- /PHOTOS -->

<div class="clearfix"></div>

<hr>

<h1 style="text-align:center">Wimbledon History</h1>

<h3 id="uclhistory">
The All England Lawn Tennis and Croquet Club is a private club founded on 23 July 1868, originally as "The All England Croquet Club". Its first ground was at Nursery Road off Worple Road, Wimbledon.[12]
<br><br>
In 1876, lawn tennis, a game devised by Major Walter Clopton Wingfield a year or so earlier as an outdoor version of real tennis and originally given the name Sphairistikè, was added to the activities of the club. In spring 1877, the club was renamed "The All England Croquet and Lawn Tennis Club" and signalled its change of name by instituting the first Lawn Tennis Championship. A new code of laws, replacing the code administered by the Marylebone Cricket Club, was drawn up for the event. Today's rules are similar except for details such as the height of the net and posts and the distance of the service line from the net.
<br><br>
The inaugural 1877 Wimbledon Championship started on 9 July 1877 and the Gentlemen's Singles was the only event held. 22 men paid a guinea to enter the tournament, which was to be held over five days. The rain delayed it four more days and thus, on 19 July 1877, the final was played. Spencer Gore, an old Harrovian rackets player, defeated William Marshall 6–1, 6-2 and 6–4 in 48 minutes. Gore was presented with the silver challenge cup, valued at 25 guineas and donated by the sports magazine The Field, as well as a prize money of 12 guineas. About 200 spectators paid one shilling each to watch the final.[13]
<br><br>
The lawns at the ground were arranged so that the principal court was in the middle with the others arranged around it, hence the title "Centre Court".[c] The name was retained when the Club moved in 1922 to the present site in Church Road, although no longer a true description of its location.[15] However, in 1980 four new courts were brought into commission on the north side of the ground, which meant the Centre Court was once more correctly described. The opening of the new No. 1 Court in 1997 emphasised the description.
</h3>
<hr>
<h1 style="text-align:center">Wimbledon Schedule</h1>

<h3 id="uclhistory">
Each year the tournament begins on the last Monday in June or first Monday in July, two weeks after the Queen's Club Championships, which is one of the men's major warm-up tournaments, together with the Gerry Weber Open, which is held in Halle, Germany, during the same week. Other grass-court tournaments before Wimbledon are Eastbourne, Great Britain, and Rosmalen in the Netherlands, both combining mixed events. The other women's warm-up tournament for Wimbledon is Birmingham, also in Great Britain. The men's event which is outside Europe before Wimbledon is the Antalya open in Turkey. The only grass-court tournament scheduled after the Championships is the Hall of Fame Tennis Championships at Newport, Rhode Island, USA, which takes place the week after Wimbledon.
<br><br>
Wimbledon is scheduled for 14 days, beginning on a Monday and ending on a Sunday. Before 1982 it ended a day earlier, with the women's singles final on the Friday and the men's singles final on the Saturday.[39] The five main events span both weeks, but the junior and invitational events are held mainly during the second week. Traditionally, unlike the other three tennis Grand Slams, there is no play on the "Middle Sunday", which is considered a rest day. However, rain has forced play on the Middle Sunday four times, in 1991, 1997, 2004 and 2016. On the first of these four occasions, Wimbledon staged a "People's Sunday", with unreserved seating and readily available, inexpensive tickets, allowing those with more limited means to sit on the show courts.
<br><br>
The second Monday at Wimbledon is often called "Manic Monday", because it is the busiest day with the last-16 matches for both men's and women's singles, where fans have a pick of watching on a single day, any of the best 32 players left; which is also unique in a Grand Slam singles competition.[40]
<br><br>
From 2022, Wimbledon will make Middle Sunday a permanent fixture to the schedule. This would allow for more leeway for Round of 16 matches to be completed on schedule, as announced in their 2021 Spring Press Conference.[41]
<br><br>
Since 2015, the championships have begun one week later than in previous years, extending the gap between the tournament and the French Open from two to three weeks.[42] Additionally the Stuttgart Open men's tournament converted to a grass surface and was rescheduled from July to June, extending the grass court season.
</h3>
<hr>
<iframe class="center2" width="560" height="315" src="https://www.youtube.com/embed/fZL_lAtVS2I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><hr>
<div class="T">
   <table style="width:100%; background-color: rgb(26, 26, 26);">
  <tr>
  <th style= "width:30%"></th>
  </tr>

    <tr>
  <td colspan="2">
  <h3 id="forbesh3">List of Wimbledon gentlemen's singles champions
</h3><h1 id="forbesh1">  
  The Championships, Wimbledon is an annual British tennis tournament created in 1877 and played on outdoor grass courts[a][b][3] at the All England Lawn Tennis and Croquet Club (AELTC) in the Wimbledon suburb of London, United Kingdom.[4] The Gentlemen's Singles was the first event contested in 1877.[2]


</h1>
  </td>  
  </tr>
  
  <tr>
  <td colspan="2">
  <h3 id="forbesh3">#1 | 8 Titles</h3><h1 id="forbesh1">Roger Federer</h1>
  </td>  
  </tr>
  <tr>
     <td><img src="images/rfw.jpg" width="215px" style="margin-left: 25px;" alt="img"></td>
    <td><p id="forbesp" style="margin-right: 20px;">
    Roger Federer (German: [ˈrɔdʒər ˈfeːdərər]; born 8 August 1981) is a Swiss professional tennis player. He was ranked world No. 1 by the Association of Tennis Professionals (ATP) for 310 weeks, including a record 237 consecutive weeks, and has finished as the year-end No. 1 five times. He has won 103 ATP singles titles, the second most of all time after Jimmy Connors, including 20 Grand Slam titles, a record eight men's singles Wimbledon titles, and a record six year-end championships.
    </p></td>
  </tr>
  <tr>
    <td colspan="2">
    <h3 id="forbesh3">#2 | 7 Titles</h3><h1 id="forbesh1">William Renshaw</h1>
    <p id="forbesp" style="margin-right: 20px;">
    </p>

    </td>  
  </tr>
  <tr>
     <td><img src="images/wrw.jpg" width="215px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;">
     William Charles Renshaw (3 January 1861 – 12 August 1904) was a British tennis player active during the late 19th century, who was ranked world No. 1. He won twelve Major titles during his career. A right-hander, he was known for his power and technical ability which put him ahead of competition at the time. Renshaw shared the all-time male record of seven Wimbledon singles titles with American Pete Sampras until 2017 when Roger Federer won his eighth singles title.[3] His six consecutive singles titles (1881–86) is an all-time record. Additionally he won the doubles title five times together with his twin brother Ernest. William Renshaw was the first president of the British Lawn Tennis Association (LTA).


    </p></td>
  </tr>
  <tr>
    <td colspan="2">
    <h3 id="forbesh3">#2 | 7 Titles</h3><h1 id="forbesh1">Pete Sampras</h1></tr>

    </td>
  <tr>
     <td><img src="images/psw.jpg" width="215px" style="margin-left: 25px;" alt="img"></td>
     <td><p id="forbesp" style="margin-right: 20px;">
     Petros "Pete" Sampras (Greek: Πέτρος Σάμπρας; born August 12, 1971) is an American former world No. 1 tennis player. His professional career began in 1988 and ended at the 2002 US Open, which he won, defeating longtime rival Andre Agassi in the final. Sampras won 14 major singles titles during his career, which was an all-time record at the time of his retirement: a then-record seven Wimbledon titles, two Australian Opens and a joint Open Era record five US Open titles.


    </p></td>
  </tr>
   </table> 
   <br><hr><br>
  </div>
<!-- GIf -->
    <img style="float: left; margin-left:150px;" width="515px" src="images/wmgif1.gif" alt="Snow">
    <img id="uclgif" style="float: right; margin-right:150px;" src="images/wmgif3.gif" alt="Mountains">
<!-- /GIf -->

</div>
<br>
<!-- MIDDLECOLUMN -->
</div>
<!--/row -->

</body>
</html>