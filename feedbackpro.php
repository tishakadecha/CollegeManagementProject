<?php

if(isset($_POST['submit']))
{
	
	$con=mysqli_connect("localhost","root","","education");

	$name=$_POST['name'];
	$email=$_POST['email'];
	$cno=$_POST['cno'];
	$msg=$_POST['msg'];
			
	if($name!="" || $email!="" || $cno!="" || $msg!="")
	{
		$q=mysqli_query($con,"insert into feedback values('','$name','$email','$cno','$msg')");
		echo "<script>alert('You Feedback Submitted...')</script>";
		echo "<script>window.location='index.php'</script>";	
	}
}
else
{
	echo "<script>alert('Worng Operation...')</script>";
	echo "<script>window.location='index.php'</script>";
}
?>
