<html>
<head>
<title>User Login</title>
<style>
body{	
	font-size:19px;
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
	border-radius:4px;}
hover{
background:#FFF;
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
    background-color:#2c7ac5;
}

</style>
</head>
<body>
<?php session_start();?>
<div class="header">
  <img src="th1.png" height="100" width="100%">
</div>

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="About.php">About</a></li>

  <li><a href="vote.php">Current polls</a></li>
<?php
if(!empty($_SESSION["id"])){ echo "<li><a href='signout.php'>Signout</a></li>";} ?>
</ul>

<center>
<?php if(empty($_SESSION['id'])){echo '<div align="center">';
echo '<marquee><h1>  ONLINE VOTING SYSTEM  </h1></marquee>';
echo '<div class="tablerow">	';
echo '<div class="tbllogin">';


echo '<a class="btnSubmit"  href="logini.php" style ="background-color:MediumSeaGreen;">  LOGIN </a>';
echo '<a class="btnSubmit"  href="reg.html" style ="background-color:MediumSeaGreen;">  REGISTER </a>';

echo '</div>';
echo '</div>';
echo '</div>';


}else header("Location:vote.php");	?>
</center>
	</body>
</html>