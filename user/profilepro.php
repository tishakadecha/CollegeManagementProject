<?php
	include("header.php");
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mno = $_POST['mno'];
	$pswd = $_POST['pswd'];
	$gender = $_POST['gender'];
	$edu = $_POST['edu'];
	$dob = $_POST['dob'];
	$photo = $_POST['photo'];
	$p_name=$_FILES['photo']['name'];
	$p_size=$_FILES['photo']['size'];
	$tmp_name=$_FILES['photo']['tmp_name'];
 	$result=move_uploaded_file($tmp_name,"../upload/".$p_name);
	echo $name.$email.$mno.$pswd;

	$q=mysqli_query($cn,"update registration set name = '$name' , email = '$email' , mobile_no = '$mno', password = '$pswd', gender = '$gender', education = '$edu', dob = '$dob', photo = '$p_name' where id='$id'");	
	$result=mysqli_affected_rows($q);
	if($result>0)
	{
		echo "<script> alert('Profile Updated Successfully....')</script>";
		echo "<script>window.location='profile.php'</script>";
	}
?>