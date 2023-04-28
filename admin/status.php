<?php
	include("header.php");
?>
<table>
<?php
	$id=$_GET['id'];
	$q=mysqli_query($cn,"select * from inquiry where id='$id'");
	echo "<form method='POST' action='statuspro.php'>";
	while($r=mysqli_fetch_array($q))
	{
		echo "<input type='hidden' name='id' value=".$id.">";
		echo "<tr><td>College Name : </td>";
		echo "<td><input type='text' name='cnm' value=".$r[1]."></td></tr>";
		echo "<tr><td>Course Name :</td>";
		echo "<td><input type='text' name='coursenm' value=".$r[2]."></td></tr>";
		echo "<tr><td>User Name :</td>";
		echo "<td><input type='text' name='usernm' value=".$r[3]."></td></tr>";
		echo "<tr><td>Email :</td>";
		echo "<td><input type='text' name='email' value=".$r[4]."></td></tr>";
		echo "<tr><td>Contact No. :</td>";
		echo "<td><input type='text' name='mno' value=".$r[5]."></td></tr>";
		echo "<tr><td>Status</td>";
		echo "<td><select name='status'>";
		echo "<option value=' '>--Select Status--</option>";
		echo "<option value='Pandding'>Pandding</option>";
                   	                   echo "<option value='Confirm'>Confirm</option>";
	                   echo "<option value='Follow Up'>Follow Up</option>";
	                   echo "<option value='Follow Up Again'>Follow Up Again</option>";
		echo "<option value='Cancle'>Cancle</option>";
		echo "</select></td></tr>";
	}
	echo "<tr><td></td><td><input type='submit' value='Update Status'></td></tr>";
?>
</table>		
<?php
	include("footer.php");
?>