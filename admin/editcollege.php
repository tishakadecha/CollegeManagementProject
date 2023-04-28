<?php
	include("header.php");
?>
<table>
<?php
	$id=$_GET['id'];
	$q=mysqli_query($cn,"select * from college where id='$id'");
	echo "<form method='POST' action='updatecollege.php' enctype='multipart/form-data'>";
	while($r=mysqli_fetch_array($q))
	{
		echo "<input type='hidden' name='id' value=".$id.">";
		echo "<tr><td>Name : </td>";
		echo "<td><input type='text' name='name' value=".$r[1]."></td></tr>";
		echo "<tr><td>City :</td>";
		echo "<td><select name='city'><option value='0'>Select City</option>";
				
					$q = mysqli_query($cn,"select id,name from city");
					while($r = mysqli_fetch_array($q))
					{
						echo "<option value='".$r[1]."'>".$r[1]."</option>";
					}
				
			echo "</select></td></tr>";
		
		echo "<tr><td>Contact No. :</td>";
		echo "<td><input type='text' name='cno' value=".$r[3]."></td></tr>";
		echo "<tr><td>Contact Person :</td>";
		echo "<td><input type='text' name='cp' value=".$r[4]."></td></tr>";
		echo "<tr><td>Email :</td>";
		echo "<td><input type='text' name='email' value=".$r[5]."></td></tr>";
		echo "<tr><td>University Name :</td>";
		echo "<td><input type='text' name='uname' value=".$r[6]."></td></tr>";
		echo "<tr><td>Cources :</td>";
		$q = mysqli_query($cn,"select * from course_list");
				echo "<table>";
				$cnt = 0;
				while($r = mysqli_fetch_array($q))
				{
					if($cnt%5 == 0)
						echo "<tr> <td><input type='checkbox' name='cources[]' value='".$r[1]."' size=28>".$r[1]."</td>";
					else
						echo "<td><input type='checkbox' name='cources[]' value='".$r[1]."' size=28>".$r[1]."</td>";
					$cnt++;
				}
				echo "</table> </tr>";
	}
	echo "<tr><td></td><td><input type='submit' value='UpdateDetails'></td></tr>";
?>
</table>
<?php
	include("footer.php");
?>