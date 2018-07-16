
<html>
<head>
<title>User Login</title>
<style>
body{
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

</style>
</head>
<body>
<div class="header">
  <img src="th1.png" height="100" width="100%">
</div>

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="About.php">About</a></li>
  <li><a href="vote.php">Current polls</a></li>
  <?php if(!empty($_SESSION["id"])){
echo "<li><a href='signout.php'>Signout</a></li>";}?>
</ul>

<div align="center">
<div class="tablerow">	
<div class="tbllogin">
<marquee><h1>  Enter your registered aadhar number</h1><a href="reg.html"> if not registerd click here</a></marquee>
<form action="process.php" method="post">

<input class="login-input" type="number" placeholder="ENTER 12 Digit Aadhar Number" name="id" 	max="999999999999" min="111111111111"  required autofocus><br><br>
<button class="btnSubmit" type="submit" name="btn-save">Submit</button>


</form>
</div>
</div></div>
	</body>
</html>