<html>
<head>
<title>Login Page</title>
</head>
<style>
body {
  background-image: url(https://news.mit.edu/sites/default/files/styles/news_article__image_gallery/public/images/201511/MIT-Building10-madcoverboy_0.jpg?itok=tVwsV5ua);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
 
}
</style>
<body style="background-color:grey;">
<table  bgcolor="F0F8FF" align="center">

<form name="loginForm" method="post" action="Welcome.php">




<tr>
<br><br><br><br><br><br><br><br><br><br>
<td colspan=2><center><font size=15><b>Student Portal</b></font></center></td>
</tr>

<tr>
<td>Studentname:</td>
<td><input type="text" size=25 name="name"></td>
<?php if(isset($_COOKIE["studentname"])) { echo $_COOKIE["studentname"]; } ?> </td>
</tr>

<tr>
<td>Password:</td>
<td><input type="Password" size=25 name="pass"></td>
<?php if(isset($_COOKIE["studentname"])) { echo $_COOKIE["studentname"]; } ?> </td>
</tr>

<tr>
<td ><input type="Reset"></td>
<td><input type="submit" onclick="return check(this.form)" value="Login"></td>
</tr>

<tr>
<td> &nbsp; </td>
<td> <pre> Sign up here <a href = "http://localhost/E%20ass/Sign%20up.php">Sign up </a> </pre></td>
</tr>

</table>



</form>


</body>
</html>