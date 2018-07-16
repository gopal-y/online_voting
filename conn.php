<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
 $host = "sql105.epizy.com"; // hostname
$user = "epiz_21845539"; // username
$pass = "prashanthi047"; // password
$db = "epiz_21845539_pr"; // database name
$i=$_SESSION['id'];
$vote=$_POST['vote'];
$connection = mysql_connect($host,$user,$pass) or die("Database connection failed: ".mysql_error());
$database = mysql_select_db($db,$connection) or die("DB Selection Error: ".mysql_error());
?>