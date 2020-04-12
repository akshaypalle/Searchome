<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Renting";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// sql to create table

$sql = "CREATE TABLE data(
name VARCHAR(30) NOT NULL,
phone_no integer(20),
amount integer(50),

)";
if (mysqli_query($conn, $sql)) {
    echo "Table data created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>