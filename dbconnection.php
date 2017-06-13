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
 echo"<p>Click here for <a href='register.php'>Registration</a></p>";
}
else
{
 echo "ERROR:" . mysqli_error($conn);
}

//connection close
mysqli_close($conn);
?>
