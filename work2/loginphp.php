<?php
define('DB_USER',"root");
define('DB_PASSWORD',"");
define('DB_DATABASE',"userpass");
define('DB_SERVER',"localhost");
$con =mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD);
mysqli_select_db($con,DB_DATABASE);
if(isset($_POST['submit'])){
$email=$_POST['n5'];
$firstname=$_POST['p5'];
$lastname=$_POST['v5'];
$dob=$_POST['n4'];
$phnum=$_POST['p4'];
$username=$_POST['useme'];
$password=$_POST['passme'];
$sql="INSERT INTO usertab (email, firstname, lastname, dob, phnum, username, password) VALUES ('$email', '$firstname', '$lastname', '$dob', '$phnum','$username','$password')";
echo " inserted";
}
else" failed";
mysqli_close($con);
?>