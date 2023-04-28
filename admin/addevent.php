<?php	
	$cn = mysqli_connect("localhost","root","","education");
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$info = $_POST['info'];
		$status = $_POST['status'];
		

		$q = mysqli_query($cn,"INSERT INTO `event` (`name`, `info`, `status`) VALUES ('$name', '$info', '$status')");			
		echo "<script>alert('Event Registered Successfully')</script>";
		echo "<script>window.location='event.php'</script>";
	}
	echo "<script>window.location='index.php'</script>";		
?>