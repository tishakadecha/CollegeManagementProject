<?php	
	$cn = mysqli_connect("localhost","root","","education");
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$city = $_POST['city'];
		$cno = $_POST['cno'];
		$cp = $_POST['cp'];
		$email = $_POST['email'];
		$uname = $_POST['uname'];
		$cources =implode(',',$_POST['cources']);
		echo $cources;
		$image = $_FILES['image']['name'];
		
		move_uploaded_file($_FILES['image']['tmp_name'],"../image/".$_FILES['image']['name']);
		$q = mysqli_query($cn,"INSERT INTO `college` (`id`, `name`, `city`, `contact_no`, `contact_person`, `email`, `unversity_name`, `courses`, `image`) VALUES (NULL, '$name', '$city', '$cno', '$cp', '$email', '$uname', '$cources', '$image')");			
		echo "<script>alert('College Registered Successfully')</script>";
		echo "<script>window.location='college.php'</script>";
	}
	echo "<script>window.location='index.php'</script>";		
?>