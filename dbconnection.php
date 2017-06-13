<?php
include("config.php");
$conn=$db;

if($conn === false)
{
 die("error:" . mysql_connect_error());
}

$sql="create table register(name varchar(200),username varchar(200),password varchar(200),email varchar(200),contactno varchar(200),qual varchar(200),country varchar(200))";

if(mysqli_query($conn,$sql))
{
 echo "Database test success";
 echo"<p>Click here for <a href='register.php'>Registration</a></p>";
}
else
{
 echo "ERROR:" . mysqli_error($conn);
}

//connection close
mysqli_close($conn);
?>
