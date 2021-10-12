<html>
<head>
<style>
body {
  background-image: url('https://www.yorkpress.co.uk/resources/images/8118953?type=responsive-gallery-fullscreen');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
<form name="gradingsystemForm" method="post"action="gradingsystem.php">
<body align = "center" bgcolor = "E6C2BF">

<fieldset>
<?php
if(isset($_POST['s']))////checking whether the input element is set or not
{
    $a=$_POST['t1']; //accessing value from 1st text box
    $a1=$_POST['t2']; //accessing value from 2nd text field
    $a2=$_POST['t3']; //accessing value from 3rd text field
	$a3=$_POST['t4']; //accessing value from 4th text field
	$a4=$_POST['t5']; //accessing value from 5th text field
    $sum=$a2+$a3+$a4; //total marks
    $avg=$sum;
    if($avg>=0&&$avg<=29)
        $grade="F";
    if($avg>30&&$avg<=39)
        $grade="C";
    if($avg>40&&$avg<=59)
        $grade="C";
    if($avg>60&&$avg<=79)
        $grade="B";
    if($avg>90)
        $grade="A";
    echo "<br>";
    echo "<font size=4><center>Student Name is:-".$a."</center><br>"; 
    echo "<font size=4><center>Matric Number is:- 19080158</center><br>";
	echo "<font size=4><center>Marks for Addmaths test 1 is:-".$a2."</center><br>";
	echo "<font size 4><center>Marks for Addmaths test 2 is:-".$a3."</center><br>";
	echo "<font size 4><center>Marks for Final Examination is:-".$a4."</center><br>";
    echo "<font size=4><center>Total marks:-".$sum."</center><br>"; 
    echo "<font size=4><center>Grade is:-".$grade."</center>"; 
}	
mysqli_close ($conn);


            ?>
			
			
<table>
<tr>
<			</body>
</html>