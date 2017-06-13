<?php
include("config.php");
$conn=$db;

if($conn === false)
{
 die("error:" . mysql_connect_error());
}

$sql="create table test(id int,name varchar(20))";

if(mysqli_query($conn,$sql))
{
 echo "Database test success";
}
else
{
 echo "ERROR:" . mysqli_error($conn);
}

//connection close
mysqli_close($conn);
?>