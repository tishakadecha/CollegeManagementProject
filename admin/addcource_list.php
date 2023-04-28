<?php	
	$cn = mysqli_connect("localhost","root","","education");
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$duration = $_POST['duration'];
		$eligibility = $_POST['eligibility'];
		$intact_cap = $_POST['intact_cap'];

		$q = mysqli_query($cn,"INSERT INTO `course_list` (`id`, `name`, `duration`, `eligibility`, `intact_cap`) VALUES (NULL, '$name', '$duration', '$eligibility', '$intact_cap')");		
		echo "<script>alert('Course Registered Successfully')</script>";
		echo "<script>window.location='cource_list.php'</script>";
	}
	echo "<script>window.location='index.php'</script>";		
?>