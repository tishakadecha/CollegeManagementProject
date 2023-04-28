<?php

if(isset($_POST['sub']))
{
	$con=mysqli_connect("localhost","root","","education");

	$nm=$_POST['nm'];
	$email=$_POST['email'];
	$mno=$_POST['mno'];
	$ps=$_POST['ps'];
		
	if($nm=="" || $email=="" || $mno=="" || $ps=="")
	{
		echo "<script>alert('fill all records')</script>";
		echo "<script>window.location='registrtion.php'</script>";
	}
	else
	{	$q1=mysqli_query($con,"select mobile_no from registration where mobile_no='$mno'");
		if(mysqli_num_rows($q1)!=0)
		{
			echo "<script>alert('user already exists')</script>";
			echo "<script>window.location='registrtion.php'</script>";
		}
		else
		{
			$q=mysqli_query($con,"insert into registration values('','$nm','$email','$mno','$ps','user')");

			echo "<script>alert('You Are Registered')</script>";
			echo "<script>window.location='login.php'</script>";	
		}
	}
}
?>
