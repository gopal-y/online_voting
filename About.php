<!DOCTYPE html>
<head>
<style>

body {

    font-size: 20px;
}
.header{
padding-left:18px;

padding-right:18px;}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: -webkit-sticky; /* Safari */
    position: sticky;
    top: 0;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}


li a:hover {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
h1 { 
	color:#990000;
    display: block;
    font-size: 2em;
    margin-top: 0.67em;
    margin-bottom: 0.67em;
    margin-left: 0;
    margin-right: 0;
    font-weight: bold;
}
h2 {
    color:#CC3300;
	display: block;
    font-size: 1.5em;
    margin-top: 0.83em;
    margin-bottom: 0.83em;
    margin-left: 0;
    margin-right: 0;
    font-weight: bold;
}
h3 { 
    display: block;
    font-size: 1.17em;
    margin-top: 1em;
    margin-bottom: 1em;
    margin-left: 0;
    margin-right: 0;
    font-weight: bold;
}	
h4 { 
    display: block;
    font-size: 1em;
    margin-top: 1.33em;
    margin-bottom: 1.33em;
    margin-left: 0;
    margin-right: 0;
    font-weight: bold;
}
h5 { 
    display: block;
    font-size: .83em;
    margin-top: 1.67em;
    margin-bottom: 1.67em;
    margin-left: 0;
    margin-right: 0;
    font-weight: bold;
}
p { 
    display: block;
    font-size: .67em;
    margin-top: 2.33em;
    margin-bottom: 2.33em;
    margin-left: 0;
    margin-right: 0;
    font-weight: bold;
}
</style>
<title>ABOUT DIFFRENT TYPES OF VOTINGS</title>
</head>
<body>
<div class="header">
  <img src="th1.png" height="100" width="100%">
</div>

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="About.php">About</a></li>
  <li><a href="vote.php">Current polls</a></li>
<?php session_start(); 
  if(!empty($_SESSION["id"])){
echo "<li><a href='signout.php'>Signout</a></li>";}?></ul>
<div align="center" style="padding:10px">

<h1>ABOUT </h1>
<h4>In Votings  are divided into 4 types,they are.<br><br>
1.Early Voting<br>
2.Adsentee Voting<br>
3.Election Day Voting<br>
4. Online Voting system<br></h4>


<h2>Early Voting</h2>
<p>    1.In some states there is an early voting option prior to Election day,Where registered voters may caste a ballot in a designated period prior to Election Day.<br>
    2.Each state or jurisdiction have varying rules and times,please check the details in your state.<br>
   </p>
<h2>Adsentee Voting(By Mail)</h2>
<p>
Absnetee ballots are available to voters in all states with different restrictions depending on the state.<br>
 The Form that absentee voting takes varies-generally,absentee voting consists of a ballot mailed to your residence,allowing you to cast a vote prior to-or by-Election Day by mail.</p>
 <h2>Election Day voting</h2>
<p>1.Some ststes require a vallid photo ID before you cast your ballot,or else you will cast a provisional ballot. OD.<br>
2.As Election Day draws closer,you may find your polling location here.<br>
</p>
<h2>Online -Voting system</h2>
<p>1.Flexible feature-rich online voting technology.<br>
2.High security,high performance online elections.<br>
3.Ready for online voting in 24 hours.<br>
4.save time,money and effort.<br>
5.web-based,fully hosted and independent.<br>
</p>
</div></body></html>