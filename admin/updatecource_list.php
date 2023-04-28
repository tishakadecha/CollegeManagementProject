<?php
	include("header.php");
	$id = $_POST['id'];
	$name = $_POST['name'];
	$duration = $_POST['duration'];
	$eligibility = $_POST['eligibility'];
	$intact_cap = $_POST['intact_cap'];
	$stream = $_POST['stream'];
	echo $name.$duration.$eligibility.$intact_cap;

	$q=mysqli_query($cn,"update course_list set name = '".$name."' , duration = '".$duration."' , eligibility = '".$eligibility."', intact_cap = '".$intact_cap."',stream = '".$stream."' where id='".$id."'");	
	echo "<script> alert('Record Updated Successfully....')</script>";
	echo "<script>window.location='cource_list.php'</script>";
?>