<?php
$host="localhost";
$user= "root";
$pwd="";
$dbname="car_rental";
$tblname="users";
$con=mysqli_connect($host,$user,$pwd,$dbname);
$link = mysqli_connect($host, $user, $pwd, $dbname);
if(!$con)
{die(mysqli_error($con));}
else
{echo "<br>";}
?>