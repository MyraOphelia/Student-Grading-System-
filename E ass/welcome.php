<html>
<head>
<style>
body {
  background-image: url('https://www.weareresonate.com/wp-content/uploads/2021/04/Harvard-University.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: cover;
}
</style>
<form name="loginForm" method="post" action="gradingsystem.php">
<br><br><br>
	<h1 align = "center" size = "60" > Welcome to the Grading System!!</h1>
</head>	

<table align="center">
<tr>
<td> <br><img src="data:image/png;base64,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" alt="Ball" width="600" height="400"> </td>
</tr>
<br>


<?php

$Studentname = $_POST["name"];
$Password = $_POST["pass"];

if ($Studentname =='myra' AND $Password=='123') {
   echo '<INPUT TYPE = "Submit" Name = "Submit2" VALUE = "Proceed to Main Page">';
} 

elseif ($Studentname =='ophelia' AND $Password=='456') {
   echo '<INPUT TYPE = "Submit" Name = "Submit2" VALUE = "Proceed to Main Page">';
 } 
 
elseif ($Studentname =='iman' AND $Password=='789') {
    echo '<INPUT TYPE = "Submit" Name = "Submit2" VALUE = "Proceed to Main Page">';
 }
  
else {
    echo "<br/><br/><b>Error username or password!</b><br/><br/>";
	echo "<b>Go</b>";
	echo '<a href = "http://localhost/E%20ass/login.php"> back </a>';
	echo"<b>to login page</b>";
}
?>



</table>

<body style="background-color:silver;">
</form>
</body>
</html>