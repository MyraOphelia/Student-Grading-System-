<?php
$servername = "localhost";
$studentname = "root";
$password = "";
$dbname = "finaleassignment";


//Create connection
$conn = mysqli_connect($servername, $studentname, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE signup (
id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
matric INT (40),
password VARCHAR(30) NOT NULL,
email VARCHAR(50),
age INT(6)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table SignUp created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>