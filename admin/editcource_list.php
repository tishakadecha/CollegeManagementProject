<?php
	include("header.php");
?>
<table>
<?php
	$id=$_GET['id'];
	$q=mysqli_query($cn,"select * from course_list where id='$id'");
	echo "<form method='POST' action='updatecource_list.php'>";
	while($r=mysqli_fetch_array($q))
	{
		echo "<input type='hidden' name='id' value=".$id.">";
		echo "<tr><td>Name : </td>";
		echo "<td><input type='text' name='name' value=".$r[1]."></td></tr>";
		echo "<tr><td>Duration : </td>";
		echo "<td><input type='text' name='duration' value=".$r[2]."></td></tr>";
		echo "<tr><td>Eligibility : </td>";
		echo "<td><input type='text' name='eligibility' value=".$r[3]."></td></tr>";
		echo "<tr><td>Intact Cap : </td>";
		echo "<td><input type='text' name='intact_cap' value=".$r[4]."></td></tr>";
		echo "<tr><td>Stream : </td>";
		echo "<td><input type='text' name='stream' value=".$r[5]."></td></tr>";
	}
	echo "<tr><td></td><td><input type='submit' value='UpdateDetails'></td></tr>";
?>
</table>
<?php
	include("footer.php");
?>