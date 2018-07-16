<?php

$url='sql105.epizy.com';
$username = "epiz_21845539";
$password = "prashanthi047";
$dbname = "epiz_21845539_pr";
$conn = mysqli_connect($url, $username, $password, $dbname);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$id=$_POST['id'];

$sql="select * from user where id=$id";
$row=@mysqli_query($conn,$sql);
$n=mysqli_num_rows($row);
if($n==0){include("err.php"); }
if($n==1){
$result=@mysqli_fetch_array($row);

$mobileNumber = $result["mobile"];

//Define route 
if(isset($_POST['btn-save']))
	{echo $url;
session_start();
$_SESSION['pass']=$result['passwd'];
$_SESSION['name']=$result['name'];
$_SESSION['id']=$result['id'];
$_SESSION['phone']=$result['mobile'];
$_SESSION['otp']=$rndno;
header( "Location: otp.php" ); 
}
}
?>