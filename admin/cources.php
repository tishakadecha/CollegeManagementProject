<?php
	include("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cource</title>
</head>

<body>
    <h1 align="center"> <font size="+6" color="maroon"> Add Cources</font> </h1>
	<form action="addcources.php" method="POST">
	<table border="2" align="center">
  		<tr>
			<td>Institute Id :</td>
			<td>
			<select name="ind">
				echo "<option value='0'>Select College</option>";
				<?php
					$q = mysqli_query($cn,"select id,name from college");
					while($r = mysqli_fetch_array($q))
					{
						echo "<option value='".$r[0]."'>$r[1]</option>";
					}
				?>
			</select>
			</td>
		</tr>	
		<tr>
			<td>Name :</td>
			<td><input type="text" name="name" placeholder="Enter Cources.." size=28 required></td>
		</tr>
		<tr>
			<td>Duration :</td>
			<td><input type="text" name="duration" placeholder="Enter Duration.." size=28 required></td>
		</tr>
		<tr>
			<td>Eligibility :</td>
			<td><input type="text" name="eligibility" placeholder="Enter Eligibilty" size=28 required></td>
		</tr>
		<tr>
			<td>Fees :</td>
			<td><input type="text" name="fees" placeholder="Enter Fees.." size=28 required></td>
		</tr>
		<tr>
			<td>Intact Capisity :</td>
			<td><input type="text" name="ic" placeholder="Intact Capisity.." size=28 required></td>
		</tr>
	
		<tr>
			<td align=center colspan=2><input type="submit" value="Submit" name="submit"></td>
		</tr>
	</table>
	</form>

    <table border="3" align="center" bordercolor="red" width="100%" height="10%">
	<tr>
	     <th>id</th>
	     <th>institute_id</th>
	     <th>name</th>
	     <th>duration</th>
	     <th>eligibility</th>
	     <th>fees</th>
	     <th>intact_capisity</th>
	     <th>Action</th>
	</tr>
	<?php
		$q = mysqli_query($cn,"select * from courses");
		//$cnt = 0;
		while($r = mysqli_fetch_array($q))
		{
			echo "<tr> <td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[5]."</td><td>".$r[6]."</td><td><a href='delcources.php?id=".$r[0]."'>Delete</a><a href='editcource.php?id=".$r[0]."'>Update</a></td></tr>";
		}
	?>

    </table>

</body>
<?php
	include("footer.php");
?>
</html>

	