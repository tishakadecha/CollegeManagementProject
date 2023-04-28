<?php

if(isset($_POST['submit']))
{
	
	$con=mysqli_connect("localhost","root","","education");

	$cnm=$_POST['cnm'];
	$coursenm=$_POST['coursenm'];
	$usernm=$_POST['usernm'];
	$email=$_POST['email'];
	$mno=$_POST['mno'];
	$id=$_POST['id'];		
	if($cnm!="" || $coursenm!="" || $usernm!="" || $email!=""|| $mno!="")
	{
		echo $cnm." | ".$coursenm." | ".$usernm." | ".$email." | ".$mno." | ".$id;
		$q=mysqli_query($con,"insert into inquiry values('', '$cnm', '$coursenm', '$usernm', '$email', '$mno','pending')");
		echo "<script>alert('You Inquiry Submitted...')</script>";
		echo "<script>window.location='collegedisp.php?id=".$id."'</script>";	
	}
}
else
{
	echo "<script>alert('Worng Operation...')</script>";
	echo "<script>window.location='index.php'</script>";
}
?>
