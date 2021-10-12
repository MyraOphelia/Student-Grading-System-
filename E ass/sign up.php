<html>
<head>
<br> /<br>
<h1 align = "center" color = "white" style = "bold" > Sign Up </h1>


<title>Form</title> 

<style>
body {
  background-image: url(https://www.weareresonate.com/wp-content/uploads/2021/04/Harvard-University-759x500.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<form action="displayregistration.php" method="post">
<table align= "center" border="0" bgcolor="transparent">

<tr> 	
<td>Name:</td>
<td><input type= "text" name="name" <br></td>
</tr>

<tr> 	
<td>Matric Number:</td>
<td><input type= "text" name="matric" <br></td>
</tr>

<tr> 	
<td>Password:</td>
<td><input type= "text" name="pass" <br></td>
</tr>


<tr> 
<td>Email Address:</td>
<td><input type= "text" name="email" <br></td>
</tr>


<tr>
<td>Your age:</td>
<td><input type="radio" name="age" value="<=20"> <=20 </td>
</tr>


<tr>
<td></td>
<td><input type="radio" name="age" value="21-30"> 21-30 </td>
</tr>

<tr>
<td></td>
<td><input type="radio" name="age" value="31-40"> 31-40 </td>
</tr>

<tr>
<td></td>
<td><input type="radio" name="age" value=">40"> >40 </td>
</tr>



<tr>
<td>Tells about yourself :</td>
<td><textarea rows="10" cols="30">
Type here for the details
</textarea> <br> </td>
</tr>

<tr>
<td></td>
<td> <input type="Submit">
<input type="Reset">
</td>
</tr>
</form>
</body>
</html>