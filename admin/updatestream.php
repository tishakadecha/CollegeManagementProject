<?php
	include("header.php");
	$id = $_POST['id'];
	$name = $_POST['name'];
	$cources =implode(',',$_POST['cources']);
	//$image = $_FILES['image']['name'];
	
	//move_uploaded_file($_FILES['image']['tmp_name'],"../image/".$_FILES['image']['name']);
	$q=mysqli_query($cn,"update stream set snm = '".$name."' where id = '".$id."'");
	echo "<script> alert('Record Updated Successfully....')</script>";
	echo "<script>window.location='college.php'</script>";
?>