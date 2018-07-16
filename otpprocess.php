<?php

session_start();

$urno=$_POST['passwd'];

$p=$_SESSION['pass'];
if($urno==$p)
{

header( "Location: parties.php" );
} 
else
{
echo '
<div align="center" style="padding-top:200px"><div align="center" style="width:400px;height:200px"><div 	align="center">
<marquee scrollamount="20" style="onHover:block"><h1>Invalid Password<a href="logini.php">click here to Login</a></h1></marquee>

</div></div></div>';
}
?>