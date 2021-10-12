
<html>      
    <body>
	<style>
body {
  background-image: url('https://edsurge.imgix.net/uploads/post/image/13207/shutterstock_1511963099-1584626439.jpg?auto=compress%2Cformat&w=1024&h=512&fit=crop');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: cover;
}
</style>
<form name="displaygradingsystem.php" method="post">
<table align= "center" border="0" bgcolor="transparent">

<tr>
<br><br><br><br><br><br><br><br><br><br>
<td colspan=2><center><font size=15><b>Grading System</b></font></center></td>
</tr>
                    <tr>
                        <td>
                            Student Name
                        </td>
                        <td>
                            <input type=text name="t1">
                        </td>
                    </tr>
                    <tr>
					<tr>
                        <td>
                            Matric Number
                        </td>
                        <td>
                            <input type=text name="t2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Marks for Addmaths test 1
                        </td>
                        <td>
                            <input type=text name="t3">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Marks for Addmaths test 2
                        </td>
                        <td>
                            <input type=text name="t4">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Marks for final examination
                        </td>
                        <td>
                            <input type=text name="t5">
                        </td>
                    </tr>
                </table>
                <br>
                <br>
                <input type=submit name="s" value="Result">
            </center>
          </td>
         </tr>
		 
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
    echo "<font size=4><center>Matric Number is:- 19070245</center><br>";
	echo "<font size=4><center>Marks for Addmaths test 1 is:-".$a2."</center><br>";
	echo "<font size 4><center>Marks for Addmaths test 2 is:-".$a3."</center><br>";
	echo "<font size 4><center>Marks for Final Examination is:-".$a4."</center><br>";
    echo "<font size=4><center>Total marks:-".$sum."</center><br>"; 
    echo "<font size=4><center>Grade is:-".$grade."</center>"; 
}

            ?>
    </form>
   </body>
</html>

