<?php
	include("header.php");
	$id = $_POST['id'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$cno = $_POST['cno'];
	$cp = $_POST['cp'];
	$email = $_POST['email'];
	$uname = $_POST['uname'];
	$cources =implode(',',$_POST['cources']);
	echo $cources;
	//$image = $_FILES['image']['name'];
	
	//move_uploaded_file($_FILES['image']['tmp_name'],"../image/".$_FILES['image']['name']);
	$q=mysqli_query($cn,"update college set name = '".$name."', city = '".$city."', contact_no = '".$cno."', contact_person = '".$cp."', email = '".$email."', unversity_name = '".$uname."', courses = '".$cources."' where id = '".$id."'");
	echo "<script> alert('Record Updated Successfully....')</script>";
	echo "<script>window.location='college.php'</script>";
?>