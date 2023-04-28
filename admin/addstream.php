<?php	
	$cn = mysqli_connect("localhost","root","","education");
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$image = $_FILES['image']['name'];
		
		move_uploaded_file($_FILES['image']['tmp_name'],"../image/".$_FILES['image']['name']);
		$q = mysqli_query($cn,"INSERT INTO `stream` (`id`, `snm`, `img`) VALUES (NULL, '$name','$image')");			
		echo "<script>alert('Stream Added Successfully')</script>";
		echo "<script>window.location='stream.php'</script>";
	}
	echo "<script>window.location='index.php'</script>";		
?>