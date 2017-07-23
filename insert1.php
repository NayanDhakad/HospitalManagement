<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "doctors");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$specialist = mysqli_real_escape_string($link, $_REQUEST['specialist']);
$time = mysqli_real_escape_string($link, $_REQUEST['time']);
$sex = mysqli_real_escape_string($link, $_REQUEST['sex']); 
// attempt insert query execution
$sql = "INSERT INTO doctor (name, specialist, time, sex) VALUES ('$name', '$specialist', '$time', '$sex')";
if(mysqli_query($link, $sql)){
    include "adlogin.html";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>