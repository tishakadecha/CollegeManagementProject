<?php
	if(isset($_GET['id']))
	{
		$cn=mysqli_connect("localhost","root","","education");
		$id = $_GET['id'];
		$q = mysqli_query($cn,"delete from city where id=$id");
		echo "<script>alert('City Delete Successfully...')</script>";
		echo"<script>window.location='city.php'</script>";
	}
	else
	{
		echo "<script>alert('Worng Operation...')</script>";
		echo "<script>window.location='index.php'</script>";
	
	}
?>
