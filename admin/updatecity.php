<?php
	include("header.php");
	$id = $_POST['id'];
	$name = $_POST['name'];

	$q=mysqli_query($cn,"update city set name = '".$name."' where id='".$id."'");	
	echo "<script> alert('Record Updated Successfully....')</script>";
	echo "<script>window.location='city.php'</script>";
?>