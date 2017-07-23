<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "signup");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$diseases = mysqli_real_escape_string($link, $_REQUEST['diseases']);
$registration_date = mysqli_real_escape_string($link, $_REQUEST['registration_date']); 
$room_no = mysqli_real_escape_string($link, $_REQUEST['room_no']); 
// attempt insert query execution
$sql = "INSERT INTO patientinfo (name, address, diseases, registration_date, room_no) VALUES ('$name', '$address', '$diseases', '$registration_date', $room_no)";
if(mysqli_query($link, $sql)){
    include "addpatientinfo.html";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>