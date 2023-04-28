<?php
	include("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course_List</title>
</head>

<body>
    <h1 align="center"> <font size="+6" color="maroon"> Add Course_list</font> </h1>
	<form action="addcource_list.php" method="POST">
	<table border="2" align="center">
  		<tr>
			<td>Name :</td>
			<td><input type="text" name="name" placeholder="Enter Cource_name" size=70 required></td>
			<tr><td>Duration :</td>
			<td><input type="text" name="duration" placeholder="Enter Duration" size=70 required></td></tr>
			<tr><td>Eligibility :</td>
			<td><input type="text" name="eligibility" placeholder="Enter Eligibility" size=70 required></td></tr>
			<tr><td>Intact Cap :</td>
			<td><input type="text" name="intact_cap" placeholder="Enter Intact_capasity" size=70 required></td></tr>
			<tr><td>Stream :</td>
			<td><input type="text" name="stream" placeholder="Enter Stream" size=70 required></td></tr>
		</tr>	
		<tr>
			<td align=center colspan=2><input type="submit" value="send" name="submit"></td>
		</tr>

	</table>
	</form><br><br>

    <table border="3" align="center" bordercolor="red" width="100%" height="10%">
	<tr>
	     <th>id</th>
	     <th>name</th>
	     <th>Duration</th>
	     <th>Eligibility</th>
	     <th>Intact Cap</th>
	     <th>Stream</th>
	     <th>Action</th>
	</tr>
	<?php
		$q = mysqli_query($cn,"select * from course_list");
		//$cnt = 0;
		while($r = mysqli_fetch_array($q))
		{
			echo "<tr> <td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[5]."</td><td><a href='delcource_list.php?id=".$r[0]."'>Delete</a><a href='editcource_list.php?id=".$r[0]."'>Update</a></td></tr>";
		}
	?>
    </table>
</form>

</body>
<?php
	include("footer.php");
?>
</html>

	