<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
$host = "sql105.epizy.com"; // hostname
$user = "epiz_21845539"; // username
$pass = "prashanthi047"; // password
$db = "epiz_21845539_pr"; // database name
$i=$_SESSION['id'];
$vote=$_POST['vote'];
$connection = mysql_connect($host,$user,$pass) or die("Database connection failed: ".mysql_error());
$database = mysql_select_db($db,$connection) or die("DB Selection Error: ".mysql_error());

$query = "INSERT INTO `voting` (`id`, `name`) VALUES ('$i','$vote')";

$result = mysql_query($query, $connection) or mysql_error();
if(mysql_error()){ // I would usually use mysql_insert_id as a validation from auto_increment tables.
  
   echo"<div align='center'><div style='padding:100px'><p>Sorry, Vote already submitted</p></div></div>";
}

$que="UPDATE `user` SET `flag`='TRUE'";
$re = mysql_query($que,$connection);	
if(mysql_error()){ // I would usually use mysql_insert_id as a validation from auto_increment tables.
  
   echo"<div align='center'><div style='padding:100px'><p>Sorry, Vote already submitted</p></div></div>";
}else{echo '<script>alert("SUBMITTED SUCCESSFULLY")</script>';
echo '<script>window.location.href="vote.php" </script>';
}
?>