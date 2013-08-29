<?php

//mysqli_connect(host,username,password,dbname);
$con=mysqli_connect("localhost","root","","Login");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//mysql_select_db("Login")or die("cannot select DB");  
$sql="INSERT INTO members (FirstName, LastName, UserName, Email, Password)
VALUES
('$_POST[first_name]','$_POST[last_name]','$_POST[user_name]','$_POST[email]','$_POST[password]')";

//$fn=$_POST[first_name];
echo "1 record added";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
 

//echo <a href="javascript:history.go(-1)">link text here...</a>
echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";

mysqli_close($con); 
?>
