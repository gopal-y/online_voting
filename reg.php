<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
if(strcmp($_POST['re'],$_POST['psw'])!=0){
echo '<script>alert("PAssword mismatch")</script>';
echo '<script>window.location.href="reg.html" </script>';
}
else{
$id=$_POST['aad'];
$name=$_POST['name'];
$mob=$_POST['mob'];
$passwd=$_POST['psw'];
require_once("conn.php");
$sql="INSERT INTO `user` values('$id','$name','$mob','$passwd',default)";

$result = mysql_query($sql, $connection) or mysql_error();
if($result){ // I would usually use mysql_insert_id as a validation from auto_increment tables.
  
  echo"<div align='center'><div style='padding:100px'><p>Successfully Registered </p></div></div>";
}

}

?>

</body>
</html>
