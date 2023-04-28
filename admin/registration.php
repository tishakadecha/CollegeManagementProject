<?php
	include("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>

<body>
    <h1 align="center"> <font size="+6" color="maroon"> Registration</font> </h1>
    <table border="3" align="center" bordercolor="red" width="100%" height="10%">
	<tr>
	     <th>id</th>
	     <th>name</th>
	     <th>email</th>
	     <th>mobile_no</th>
	     <th>password</th>
	     <th>Gender</th>
	     <th>Education Qualification</th>
	     <th>Date Of Birth</th>
	     <th>Image</th>
         <th>user_type</th>
	     <th>Action</th>
	</tr>
	<?php
		$q = mysqli_query($cn,"select * from registration");
		//$cnt = 0;
		while($r = mysqli_fetch_array($q))
		{
			echo "<tr> <td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[5]."</td><td>".$r[6]."</td><td>".$r[7]."</td><td><img height=150 width=150 border=2 src='../upload/".$r[8]."'/></td><td>".$r[9]."</td><td><a href='regdel.php?id=".$r[0]."'><input type='button'>Delete</input></a></td></tr>";
		}
	?>
    </table>
</form>

</body>
<?php
	include("footer.php");
?>
</html>

	