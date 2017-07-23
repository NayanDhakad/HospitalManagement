<?php
if(isset($_POST['submit']))
{
	$username=trim($_POST['username']);
	$password=trim($_POST['password']);
	
$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbname="cse";	 #it's depend upon ur choice
$connect=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname) or die("you have error in connectivy");

$sql="select * from student where username='$username' and password='$password'";
$query=mysqli_query($connect,$sql) or die("you have error in sql query");
if($query->num_rows>0){
	if(isset($_POST['remember'])){
	setcookie("username", $username, time()+60*60*24, "/","", 0);
   setcookie("password", $password, time()+3600, "/", "",  0);}

	$row=$query->fetch_array();
session_start();
$_SESSION['username']=$username;
$_SESSION['name']=$row['name'];
$_SESSION['email']=$row['email'];
include "welcome.php";
}
else{
	echo "<script>
alert('incorrect user-id or password')
	</script>";
	include "signin.php";
}


}

else{
include "signin.php";
}


?>