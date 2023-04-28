

<?php
	session_start();
	$usernm=$_POST['usernm'];
	$pass=$_POST['pass'];	
	$con=mysqli_connect("localhost","root","","education");
	$q=mysqli_query($con,"select * from registration where mobile_no like '$usernm' and password like '$pass'");
	$r=mysqli_fetch_row($q);
	if($r[3]==$usernm && $r[4]==$pass)
	{
		if($r[9]=='user')
		{
			$_SESSION['user']=$usernm;
			echo "<script>window.location='user/index.php'</script>";
		}
		if($r[9]=='admin')
		{
			$_SESSION['admin']=$usernm;
			echo "<script>window.location='admin/index.php'</script>";	
		}
	}
	else
	{
		
		echo "<script>window.location='login.php'</script>";
	}		
?>


