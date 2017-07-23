<html>
<head>
<title> Hospital Management </title>
<style>
	table{
		text-align: center;
		width: 900px;
	}
	th,td{
		border: solid 1px black;
		padding: 0 10px;
	}
	th{
		font-size: 22px;
		font-variant: small-caps;
	}
</style>

</head>
<body style="background-color:pink;">
<center>
<h2 style="text-align:center; style="color:blue;">All India Institute Of Medical Science</h2>
<p><img src="img4.jpg" width="900" height="352"></p>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "signup");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM patientinfo";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>name</th>";
                echo "<th>address</th>";
                echo "<th>diseases</th>";
                echo "<th>registration_date</th>";
				echo "<th>room_no</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['diseases'] . "</td>";
                echo "<td>" . $row['registration_date'] . "</td>";
				echo "<td>" . $row['room_no'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</center>
</body>
</html>