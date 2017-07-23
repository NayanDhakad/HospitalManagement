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
      $sql = "SELECT * FROM patient WHERE username = '$myusername' and password = '$mypassword';";
      $row = mysqli_query($conn,$sql) or die("error");
      if(mysqli_num_rows($row)>0){
	  echo "login successfull";
       $k=1;
      }	  
	  else $k=0;
      }	  
          
      // If result matched $myusername and $mypassword, table row must be 1 row
		
	    
       
      
   
?>
<html>
<head>
<title> Hospital Management </title>
</head>
<?php
if($k==1){
	?>
<body style="background-color:black;">
<h2 style="text-align:center; color:red;">All India Institute Of Medical Science </h2>
<p><img src="img4.jpg" width="900" height="352"></p>
<form action="docinfo.php">
<input type="submit" value="Doctors Availability"><br><br>
</form>
<form action="roominfo.php">
<input type="submit" value="Available Rooms"><br>
</form>
<form action="patientinfo.php">
<br><input type="submit" value="Patient List"<br>
</form>
<form action="stores.php">
<br><input type="submit" value="Medical stores"<br>
<?php } 
else{
	include "login.html";}
?>


</form>
</html>