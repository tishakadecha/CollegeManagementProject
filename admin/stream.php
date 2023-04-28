<?php
	include("header.php");
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stream</title>
</head>

<body>
    <h1 align="center"> <font size="+6" color="maroon"> Add Stream</font> </h1>
	<form action="addstream.php" method="POST" enctype="multipart/form-data">
	<table border="2" align="center">
  		<tr>
			<td>Name :</td>
			<td><input type="text" name="name" placeholder="Name" ></td>
		</tr>	
		<tr>
			<td>Icon :</td>
			<td><input type="file" name="image"></td>
		</tr>
		<tr>
			<td align=center colspan=2><input type="submit" value="submit" name="submit"></td>
		</tr>
	</table>
	</form>

    <table border="3" align="center" bordercolor="red" width="100%" height="10%">
	<tr>
	     <th>id</th>
	     <th>Name</th>
	     <th>Icon</th>
	     <th clospan="2">Action</th>
	</tr>
	<?php
		$q = mysqli_query($cn,"select * from stream");
		while($r = mysqli_fetch_array($q))
		{
			echo "<tr> <td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td><a href='delstream.php?id=".$r[0]."'>Delete</a></td><td><a href='editstream.php?id=".$r[0]."'>Update</a></td></tr>";
		}
	?>
    </table>
</body>
<?php
	include("footer.php");
?>
</html>	