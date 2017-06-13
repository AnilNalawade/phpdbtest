<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body style="">
<?php
include("config.php");
if(isset($_REQUEST['username']))
{
 $username=stripslashes($_REQUEST['username']);
 $password=stripslashes($_REQUEST['password']);
 $email=stripslashes($_REQUEST['email']);
 $qual=stripslashes($_REQUEST['qualification']);
 
 $sql="insert into register values($username,$password,$email,$qual)";
 $result = mysqli_query($db,$sql);
  
 if($result)
 {
  echo "<div><h1 style='margin-top:300px;'>You are registered successfully.</h1></div>";
 }
 else
 {
 ?>
 <div class="form" style="border: 3px solid; margin-top: 100px;">
 <h1><center>Registration</center></h1>
 <form name="registration" action="" method="post">
 <table style=" margin-left: 30px; margin-bottom: 30px;">
 <tr>
 <td><label> User Name  </label></td><td><input type="text" name="username" required /></td>
 </tr>
 <tr>
 <td><label> Password  </label></td><td><input type="password" name="password" required /></td>
 </tr>
<tr>
 <td><label> Email  </label></td><td><input type="email" name="email" required /></td>
 </tr>
<tr> 
<td><label> Qualification </label></td><td><select name="qual">
  <option value="SSC">SSC</option>
  <option value="HSC">HSC</option>
  <option value="Graduation">Graduation</option>
  <option value="Post-Graduation">Post-Graduation</option>
</select></td>
</tr>
<tr>
 <td><input type="submit" name="submit" value="Register"/></td>
 </tr>

</table>
</form>
</div>
<?php } 
?>
</body>
</html>
