<?php
	include("header.php");
	$id = $_POST['id'];
	$ind = $_POST['ind'];
	$name = $_POST['name'];
	$duration = $_POST['duration'];
	$eligibility = $_POST['eligibility'];
	$fees = $_POST['fees'];
	$ic = $_POST['ic'];

	$q=mysqli_query($cn,"update courses set institute_id = '".$ind."', name = '".$name."', duration = '".$duration."', eligibility = '".$eligibility."', fees = '".$fees."', intact_capicity = '".$ic."' where id = '".$id."'");	
	echo "<script> alert('Record Updated Successfully....')</script>";
	echo "<script>window.location='cources.php'</script>";
?>