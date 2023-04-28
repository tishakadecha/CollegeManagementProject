<?php
	include("header.php");
	$cn=mysqli_connect("localhost","root","","education");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>
</head>
<body>
    <h1 align="center"> <font size="+6" color="maroon">Feedbacks</font> </h1>
    <table border="3" align="center" bordercolor="red" width="100%" height="10%">
	<tr>
	     <th>id</th>
	     <th>Name</th>
	     <th>Email</th>
	     <th>Contact_no</th>
  	     <th>Message</th>
	     <th>Action</th>
	</tr>
	<?php
		$q = mysqli_query($cn,"select * from feedback");
		//$cnt = 0;
		while($r = mysqli_fetch_array($q))
		{
			echo "<tr> <td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td><a href='feedbackdel.php?id=".$r[0]."'><input type='button'>Delete</input></a></td></tr>";
		}
	?>
</table>
</body>
<?php
	include("footer.php");
?>
</html>

	