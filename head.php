<style>

body {

    font-size: 28px;
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
</style>
<div class="header">
  <img src="th1.png" height="100" width="100%">
</div>

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="About.php">About</a></li>
  <li><a href="vote.php">Current polls</a></li>
<?php 
session_start();
if(!empty($_SESSION["id"])){ echo "<li><a href='signout.php'>Signout</a></li>";} ?>
</ul>

</ul>