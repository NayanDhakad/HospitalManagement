<?php

$link = mysqli_connect("localhost", "root", "", "signup");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['username']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$mob = mysqli_real_escape_string($link, $_REQUEST['mob']); 
// attempt insert query execution
$sql = "INSERT INTO patient (username, address, password, mob) VALUES ('$name', '$address', '$password', '$mob')";
if(mysqli_query($link, $sql)){
    include "project1.html";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>