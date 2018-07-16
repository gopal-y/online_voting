<?php 
include("conn.php");
include("head.php");
$result = mysql_query("SELECT COUNT(*) AS `count` FROM `voting`");
$row = mysql_fetch_assoc($result);
$count = $row['count'];

$result = mysql_query("SELECT COUNT(*) AS `count` FROM `voting` WHERE `name`='CONGRESS' ");
$row = mysql_fetch_assoc($result);
$con = $row['count'];

$result = mysql_query("SELECT COUNT(*) AS `count` FROM `voting` WHERE `name`='BJP'");
$row = mysql_fetch_assoc($result);
$bj = $row['count'];

$result = mysql_query("SELECT COUNT(*) AS `count` FROM `voting` WHERE `name`='TDP'");
$row = mysql_fetch_assoc($result);
$tdp = $row['count'];
echo "";	

$t=$tdp*100/$count;
$c=$con*100/$count;
$b=$bj*100/$count;
?>
<html>
<style>
body{
font-size:19px;
}
progress{
width:50%;
height:5%;
}
</style>
<body>

<?php echo"<div align='center'><div style='padding-top:100px'>";?>
<marquee ><h1>CURRENT POLLING STATUS</h1></marquee>
<?php echo "<progress max=100 value=$t>

</progress>"."<h1>"."TDP:".$tdp."</h1>";?>
<br>
<?php echo "<progress max=100 value=$c>

</progress>"."<h1>"."CONGRESS:".$con."</h1>";?>
<br><br>
<?php echo "<progress max=100 value=$b>

</progress>"."<h1>"."BJP:".$bj."</h1>";?>
<br>
<?php echo "</div></div>";?>


</body>
</html>
