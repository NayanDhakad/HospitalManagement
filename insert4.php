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
$owner_name = mysqli_real_escape_string($link, $_REQUEST['ownername']);
$timing = mysqli_real_escape_string($link, $_REQUEST['timing']); 
// attempt insert query execution
$sql = "INSERT INTO medical (name,address,owner,timing) VALUES ('$name', '$address', '$owner_name', '$timing')";
if(mysqli_query($link, $sql)){
    include "adlogin.html";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>