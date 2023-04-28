<?php
	include("header.php");
	$id = $_POST['id'];
	$status = $_POST['status'];

	$q=mysqli_query($cn,"update inquiry set status = '".$status."' where id='".$id."'");	
	echo "<script> alert('Status Updated Successfully....')</script>";
	echo "<script>window.location='inquiry.php'</script>";
?>