<?php
	include("header.php");
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>College</title>
</head>

<body>
    <h1 align="center"> <font size="+6" color="maroon"> Add Colleges</font> </h1>
	<form action="addcollege.php" method="POST" enctype="multipart/form-data">
	<table border="2" align="center">
  		<tr>
			<td>Name :</td>
			<td><input type="text" name="name" placeholder="College Name" size=70 required></td>
		</tr>	
		<tr>
			<td height = 100%>City :</td>
			<td>
			<select name="city">
				echo "<option value='0'>Select City</option>";
				<?php
					$q = mysqli_query($cn,"select id,name from city");
					while($r = mysqli_fetch_array($q))
					{
						echo "<option value='".$r[1]."'>$r[1]</option>";
					}
				?>
			</select>
			</td>
		</tr>
		<tr>
			<td>Contact No. :</td>
			<td><input type="text" name="cno" placeholder="Enter Contact.." size=28 required></td>
		</tr>
		<tr>
			<td>Contact Person :</td>
			<td><input type="text" name="cp" placeholder="About Contact Person" size=28 required></td>
		</tr>
		<tr>
			<td>Email :</td>
			<td><input type="text" name="email" placeholder="Enter Email.." size=28 required></td>
		</tr>
		<tr>
			<td>University Name :</td>
			<td><input type="text" name="uname" placeholder="Enter University.." size=28 required></td>
		</tr>
		<tr>
			<td>Cources :</td>
			<td>
			<?php
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
				echo "</table>";
	?>
			</td>
		</tr>
		<tr>
			<td>College Image :</td>
			<td><input type="file" name="image">
			<small>Upload Image Here..</small>
			</td>
		</tr>
		<tr>
			<td align=center colspan=2><input type="submit" value="submit" name="submit"></td>
		</tr>
	</table>
	</form><br><br>

    <table border="3" align="center" bordercolor="red" width="100%" height="10%">
	<tr>
	     <th>id</th>
	     <th>Name</th>
	     <th>City</th>
	     <th>Contact No</th>
	     <th>contact_person</th>
	     <th>Email</th>
	     <th>Universty Name</th>
	     <th>Cources</th>
	     <th>Image</th>
	     <th>Action</th>
	</tr>
	<?php
		$q = mysqli_query($cn,"select * from college");
		//$cnt = 0;
		while($r = mysqli_fetch_array($q))
		{
			echo "<tr> <td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[5]."</td><td>".$r[6]."</td><td>".$r[7]."</td><td>".$r[8]."</td><td><a href='delcollege.php?id=".$r[0]."'>Delete</a><a href='editcollege.php?id=".$r[0]."'>update</a></td></tr>";
		}
	?>
    </table>
</body>
<?php
	include("footer.php");
?>
</html>

	