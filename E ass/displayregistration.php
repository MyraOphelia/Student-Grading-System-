<html>
<head>
<style>
body {
  background-image: url('https://ugc.futurelearn.com/uploads/images/a1/16/hero_a116db3c-4bbd-41a3-b22e-0e0e0f0d3a03.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

</style>
<form name="loginForm" method="post" action="login.php">
<body align = "center" bgcolor = "E6C2BF">

<fieldset>
<?php

$Name = $_POST["name"];
$Matric = $_POST["matric"];
$Password = $_POST["pass"];
$Email = $_POST["email"];
$getage = $_POST ['age'];

$servername = "localhost";
$studentname = "root";
$password = "";
$dbname = "finaleassignment";
	  
echo "Hello $Name, thank you for your registration into the student portal. <br/>";
echo "Your matric number is $Matric .<br/>";
echo "Your password is $Password .<br/>";
echo "The email that u entered is $Email .<br/>";
echo "The age that you used is, $getage<br/>"; 




//Create connection
$conn = mysqli_connect($servername, $studentname,$password, $dbname);


		
$sql = "INSERT INTO signup(name, matric, password, email, age) 
VALUES ('$Name', '$Matric', '$Password', '$Email', '$getage')"; 

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully <br/><br/><hr/>";
	$Name = $_POST["name"];
	$Matric = $_POST["matric"];
	$Password = $_POST["pass"];
	$Email = $_POST["email"];
	$getage = $_POST ['age'];
}	
mysqli_close ($conn);

	
?>

<table>
<tr>
<td><input type="submit" onclick="return check(this.form)" value="Login"></td>
<body style="background-color:silver;">
</body>
</html>