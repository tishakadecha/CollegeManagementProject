<html>
<head>
<link href="style1.css" rel="stylesheet">
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

</style>
<body oncontextmenu="return false">
<table height=20% width=100% border=0 bordercolor=white cellspacing=0 bgcolor=#1d3030>
	<tr>
		<td>
		<table width=100% height=100% border=0>
			<tr align=center>
			
				<td width=50% width=40%><img src="image\coll2.png" height=50px width=65px><font color=white size=40px>College Management System</font></td>
				<td width=10% class="transboxtxt" onclick="window.location='login.php'"><img src="image\login.png" height=18px width=18px>Login</a></td>
				<td width=10% class="transboxtxt" onclick="window.location='registrtion.php'"><img src="image\signup.png" height=20px width=20px>SignUp</a></td>
			</tr>
		</table></td></tr>
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
				<input type="submit" name="submit" value="search">
				</form></td></tr>
			</table></td></tr>
	</table>
</html>				