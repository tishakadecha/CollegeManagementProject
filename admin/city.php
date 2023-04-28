<?php
	include("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cities</title>
</head>

<body>
    <h1 align="center"> <font size="+6" color="maroon"> Add Cities</font> </h1>
	<form action="addcity.php" method="POST">
	<table border="2" align="center">
  		<tr>
			<td>Name :</td>
			<td><input type="text" name="name" placeholder="Enter City" size=70 required></td>
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
	     <th>Action</th>
	</tr>
	<?php
		$q = mysqli_query($cn,"select * from city");
		//$cnt = 0;
		while($r = mysqli_fetch_array($q))
		{
			echo "<tr> <td>".$r[0]."</td><td>".$r[1]."</td><td><a href='delcity.php?id=".$r[0]."'>Delete</a><a href='editcity.php?id=".$r[0]."'>Update</a></td></tr>";
		}
	?>
    </table>
</form>

</body>
<?php
	include("footer.php");
?>
</html>

	