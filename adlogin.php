<?php
   $host="localhost";
   $user="root";
   $pass="";
   $db = "signup";
	$k=0;
  // session_start();
   
   if(isset($_POST['login'])){
    
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      $conn=mysqli_connect($host,$user,$pass,$db) or die("connection error");
      $sql = "SELECT * FROM admin WHERE username = '$myusername' and password = '$mypassword';";
      $row = mysqli_query($conn,$sql) or die("error");
      if(mysqli_num_rows($row)>0){
       $k=1;
      }	  
	  else $k=0;
      }	 
	?>
<html>
<head>
<title> Hospital Management </title>

<style>
	
	form{
		display: inline;
		margin: 20px;
	}
	input[type="submit"]{
		margin: 50px 16px;
		height: 37px;
		line-height: 37px;
		padding: 0 10px;
	}

</style>

</head>
<?php
if($k==1){
	?>
<body style="background-color:black;">
<center>
<h2 style="text-align:center;color:white;">All India Institute Of Medical Science</h2>
<p><img src="img4.jpg" width="900" height="352"></p>
<form action="adddocinfo.html">
<input type="submit" value="ADD NEW DOCTOR INFO">
</form>
<form action="addroominfo.html">
<input type="submit" value="ADD ROOM INFO"> 
</form>
<form action="addpatientinfo.html">
 <input type="submit" value="ADD PATIENT INFO"> 
</form>
<form action="addmedicalinfo.php">
 <input type="submit" value="ADD MEDICAL STORES INFO"> 
<?php } 
else{
	include "admin.html";}
?>


</form>
</center>
</body>
</html>