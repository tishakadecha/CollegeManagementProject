<?php
	$cn=mysqli_connect("localhost","root","","education");
	session_start();
	$user=$_SESSION['user'];
	if(!isset($_SESSION['user']))
	{
		header("location:../index.php");
	}
?>
<head>
<head>
<link href="header.css" rel="stylesheet">
<style>
.transboxtxt{

  font-family:monospace;
  font-size:20;	
  color:white;
  text-decoration: none;
  text-align: center;
}
.transboxtxt:hover
{
	color: silver;
	cursor: pointer;
}
form.example::after {
  content: "";
  clear: both;
  display: table;
}
.button-link{
  cursor: pointer;
  background: #00A885;
  width: 25%;
  border: 0;
  padding: 10px 15px;
  color: #fff;
  font-size: 20px;
  -webkit-transition: 0.3s linear;
  transition: 0.3s linear;
}
</style>
<body oncontextmenu="return false">
<table height=20% width=100% border=0 bordercolor=white cellspacing=0 bgcolor=#1d3030>
	<tr>
		<td>
		<table width=100% height=100% border=0>
			<tr align=center>
				<td width=50% class="transboxtxt" class="text-color" width=40%><img src="..\image\coll2.png" height=50px width=65px><font color=white size=40px>College Management System</font></td>
				<td class="transboxtxt" width=10% onclick="window.location='logout.php'"><img src="..\image\logout.png" height=18px width=18px>Logout</td>
				<td class="transboxtxt" width=10% onclick="window.location='profile.php'">
				<?php
					$q=mysqli_query($cn,"select photo from registration where mobile_no='$user'");
					while($r=mysqli_fetch_array($q))
					{
						echo "<img src='../upload/".$r[0]."' height=50px width=50px style='border-radius:10em'>";
					}
				?>
				Profile</td>
			</tr>
		</table>
		<tr>
		<td>
		<table  width=95%  height=60px border=0 >
			<tr align=right>
				<td class="transboxtxt" width=10% onclick="window.location='index.php'">Home</td>
				<td class="transboxtxt" width=10% onclick="window.location='college.php'">College</td>
				<td class="transboxtxt" width=10% onclick="window.location='cources.php'">Course</td>
				<td class="transboxtxt" width=10% onclick="window.location='faq.php'">FAQ</td>
				<td class="transboxtxt" width=10% onclick="window.location='feedback.php'">Feedback</td>
				<td class="transboxtxt" width=10% onclick="window.location='aboutus.php'">About Us</td>
				<td class="transboxtxt" width=10% onclick="window.location='help.php'">Help</td>
				<td><form action="searchres.php" method="POST">
				<input type="text" name="snm" placeholder="Search..">
				<input class="button-link" type="submit" name="submit" value="Search">
				</form></td></tr>
			</table></td></tr>
	</table>
</html>