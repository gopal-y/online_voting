<!DOCTYPE html >
<html>
<head>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style>

body{
	font-size:20px;
	font-family: calibri;
}
.tblLogin {
align:center;
	border: #95bee6 1px solid;
    background: #d1e8ff;
    border-radius: 4px;
    max-width: 300px;
	padding:20px 30px 30px;
	text-align:center;
}
.tableheader { font-size: 20px; }
.tablerow { padding:100px; }
.error_message {
	color: #b12d2d;
    background: #ffb5b5;
    border: #c76969 1px solid;
}
.message {
	width: 100%;
    max-width: 300px;
    padding: 10px 30px;
    border-radius: 4px;
    margin-bottom: 5px;    
}
.login-input {
	border: #CCC 1px solid;
    padding: 10px 20px;
	border-radius:4px;
}
.btnSubmit {
	padding: 10px 20px;
    background: #2c7ac5;
    border: #d1e8ff 1px solid;
    color: #FFF;
	border-radius:4px;

}
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


#t1 {
font-family:"Trebuchet MS",Arial,Helvetica,sans-serif;
border-collapse:collapse;
width:100%;
}
#t1 td,#t1 th{
border : 1px solid #ddd;
padding:8px;
text-align:center;
}
#t1 tr:nth-child(even){background:#f2f2f2;}
#t1 tr:hover{background-color:#ddd;}
#t1 th{
align:center;
padding-top:12px;
padding-bottom:12px;
text-align:left;
background-color:#4CAF50;
color:WHITE;
}

</style>
<script>
function my(){
var v = document.getElementById('vote');
if(v=="")
{
alert("Please vote");
}

}

</script>

<title>Parties</title>

</head>

<body>

<div class="header">
  <img src="th1.png" height="100" width="100%">
</div>

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="About.php">About</a></li>
  <li><a href="vote.php">Current polls</a></li>

<li><a href='signout.php'>Signout</a></li>
</ul>
<?php 
session_start();
require_once("conn.php");
$id=$_SESSION['id'];

$query = "select * from `user` where id=$id";
$result = mysql_query("select * from `user` where id=$id");
$row = mysql_fetch_array($result,MYSQL_ASSOC);

$v=$row['flag'];
if(strlen($v)==5){
include("list.php");
 }
 
 else 
 {echo '
 <div align="center" style="padding-top:200px"><div align="center" style="width:400px;height:200px"><div 	align="center">
<marquee scrollamount="20" style="onHover:block"><h1>Vote Already Submitted.</a></h1></marquee>

</div></div></div>
 ';}
 mysql_close($connection);?>
</body>
</html>
