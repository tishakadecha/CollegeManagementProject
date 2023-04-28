<?php	
	$cn = mysqli_connect("localhost","root","","education");
	if(isset($_POST['submit']))
	{
		$ind = $_POST['ind'];
		$name = $_POST['name'];
		$duration = $_POST['duration'];
		$eligibility = $_POST['eligibility'];
		$fees = $_POST['fees'];
		$ic = $_POST['ic'];

		$q = mysqli_query($cn,"INSERT INTO `courses` (`id`, `institute_id`, `name`, `duration`, `eligibility`, `fees`, `intact_capicity`) VALUES (NULL, '$ind', '$name', '$duration', '$eligibility', '$fees', '$ic')");		
		echo "<script>alert('Cource Registered Successfully')</script>";
		echo "<script>window.location='cources.php'</script>";
	}
	echo "<script>window.location='index.php'</script>";		
?>