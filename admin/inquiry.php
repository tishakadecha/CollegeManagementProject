<?php
	include("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inquiry</title>
</head>

<body>
    <h1 align="center"> <font size="+6" color="maroon">Inquiries</font> </h1>
    <table border="3" align="center" bordercolor="red" width="100%" height="10%">
	<tr>
	 <th>id</th>
  	 <th>College Name </th>	   
	 <th>Course Name </th>
	 <th>User name</th>
                  	 <th>E-mail</th>
	 <th>Contact No.</th>
	 <th>Status</th>
	 <th>Action</th>
	</tr>
	<?php
		$q = mysqli_query($cn,"select * from inquiry");
		//$cnt = 0;
		while($r = mysqli_fetch_array($q))
		{
			echo "<tr> <td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[5]."</td><td>".$r[6]."</td><td><a href='inqdel.php?id=".$r[0]."'>Delete</a><a href='status.php?id=".$r[0]."'>Status</a></td></tr>";
		}
	?>
    </table>
</form>

</body>

</html>

	