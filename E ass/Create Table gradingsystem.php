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
$sql = "CREATE TABLE gradingsystem (
id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
matric INT (40),
test1  INT(10) NOT NULL,
test2  INT(10),
final  INT(6),
grade VARCHAR (10),
 marks INT (10)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Grading system created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>