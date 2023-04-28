<?php	
	$cn = mysqli_connect("localhost","root","","education");
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];

		$q = mysqli_query($cn,"INSERT INTO `city` (`id`, `name`) VALUES (NULL, '$name')");		
		echo "<script>alert('City Registered Successfully')</script>";
		echo "<script>window.location='city.php'</script>";
	}
	echo "<script>window.location='index.php'</script>";		
?>