<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "signup");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$room_no = mysqli_real_escape_string($link, $_REQUEST['room_no']);
$floor = mysqli_real_escape_string($link, $_REQUEST['floor']);
$room_size = mysqli_real_escape_string($link, $_REQUEST['room_size']);
$rent = mysqli_real_escape_string($link, $_REQUEST['rent']); 
// attempt insert query execution
$sql = "INSERT INTO room (room_no, floor, room_size, rent) VALUES ('$room_no', '$floor', '$room_size', '$rent')";
if(mysqli_query($link, $sql)){
    include "adlogin.html";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>