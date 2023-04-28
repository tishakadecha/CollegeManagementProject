<?php
	include("header.php");
?>
<table>
<?php
	$id=$_GET['id'];
	$q=mysqli_query($cn,"select * from courses where id='$id'");
	echo "<form method='POST' action='updatecource.php'>";
	while($r=mysqli_fetch_array($q))
	{
		echo "<input type='hidden' name='id' value=".$id.">";
		echo "<tr><td>Institute Id :</td>";
		echo "<td><input type='text' name='ind' value=".$r[1]."></td></tr>";
		echo "<tr><td>Name : </td>";
		echo "<td><input type='text' name='name' value=".$r[2]."></td></tr>";
		echo "<tr><td>Duration :</td>";
		echo "<td><input type='text' name='duration' value=".$r[3]."></td></tr>";
		echo "<tr><td>Eligibility :</td>";
		echo "<td><input type='text' name='eligibility' value=".$r[4]."></td></tr>";
		echo "<tr><td>Fees :</td>";
		echo "<td><input type='text' name='fees' value=".$r[5]."></td></tr>";
		echo "<tr><td>Intact Capisity : </td>";
		echo "<td><input type='text' name='ic' value=".$r[6]."></td></tr>";
	}
	echo "<tr><td></td><td><input type='submit' value='UpdateDetails'></td></tr>";
?>
</table>
<?php
	include("footer.php");
?>