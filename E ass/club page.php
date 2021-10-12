<html>
<head>
<br><br><br>
	<h1 align = "center" font = "white"> Please Register For The Club You Want To Join! </h1>
</head>
<style>
body {
  background-image: url('https://upload.wikimedia.org/wikipedia/en/thumb/f/f2/Premier_League_Logo.svg/1200px-Premier_League_Logo.svg.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-size: 100% 100%;
}
</style>
<form action="displayclub.php" method="post">
<body align = "center" bgcolor = "grey">


<table align= "center" border="0" bgcolor="silver">
<tr> 	
<td>Please enter your name on jersey</td>
<td><input type= "text" name="jerseyname" <br></td>
</tr>


<tr> 
<td>Please enter your number on jersey:</td>
<td><input type= "text" name="jerseynumber" <br></td>
</tr>


<tr>
<td>Please choose your position:</td>
<tr>
<td></td>
<td><input type="radio" name="position" value="Foward"> Foward </td>
</tr>

<tr>
<td></td>
<td><input type="radio" name="position" value="Defense"> Defense </td>
</tr>

<tr>
<td></td>
<td><input type="radio" name="position" value="PMid Fielder"> Mid Fielder </td>
</tr>

<tr>
<td></td>
<td><input type="radio" name="position" value="Goalkeeper"> Goalkeeper </td>
</tr>

<tr>
<td>Please choose your premier league club </td>
<td>
<select name="club">
<option value="Arsenal">Arsenal</option>
<option value="Manchester United">Manchester United</option>
<option value="Manchester City">Manchester City</option>
<option value="Liverpool">Liverpool</option>
<option value="Chelsea">Chelsea</option>
<option value="SPURS">SPURS</option>
<option value="Everton">Everton</option>
<option value="Fulham">Fulham</option>
<option value="Cardiff City">Cardiff City</option>
<option value="West Ham">West Ham</option>
<option value="AFC Bournemouth">AFC Bournemouth</option>
<option value="Brighton">Brighton</option>
<option value="Stoke City">Stoke City</option>
<option value="Leicester City">Leicester City</option>
<option value="Crystal Palac">Crystal Palace</option>
<option value="Newcastle United">Newcastle United</option>
<option value="Watford">Watford</option>



<tr>
<td>Tell us about your football experience:</td>
<td><textarea rows="10" cols="30">
Type here...
</textarea> <br> </td>
</tr>

<tr>
<br><br><br>
<td><input type="submit" onclick="return check(this.form)" value="Submit"></td>
</tr>



</body>
</html>