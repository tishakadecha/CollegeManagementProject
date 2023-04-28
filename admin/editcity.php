<?php
	include("header.php");
?>
<table>
<?php
	$id=$_GET['id'];
	$q=mysqli_query($cn,"select * from city where id='$id'");
	echo "<form method='POST' action='updatecity.php'>";
	while($r=mysqli_fetch_array($q))
	{
		echo "<input type='hidden' name='id' value=".$id.">";
		echo "<tr><td>Name : </td>";
		echo "<td><input type='text' name='name' value=".$r[1]."></td></tr>";
	}
	echo "<tr><td></td><td><input type='submit' value='UpdateDetails'></td></tr>";
?>
</table>
<?php
	include("footer.php");
?>