<?php
	$cn=mysqli_connect("localhost","root","","education");
	session_start();
	
	if(!isset($_SESSION['admin']))
	{
		header("location:../index.php");
	}
	$user=$_SESSION['admin'];
?>

<head>
<link href="style1.css" rel="stylesheet">
</head>
<body>
<table height=20% width=100% border=0 bordercolor=white cellspacing=0 bgcolor=#25383C>
	<tr>
		<td>
			<table width=100% border=0>
			<tr>
				<td  class="transboxtxt" width=75% style="padding-left:90px" colspan=8><img src="../image/coll2.png" height=50px width =70px><font color=white size=40px>College Management System</font></td>
				<td align=right  class="transboxtxt"  style="padding-right:50px"> <img src="../image/logout.png" class=" width="17px" height="18px"><a  href="logout.php">LOGOUT</a></img></td>
			</tr>
			<tr height=30%><td><font color="#1d3030"></td></tr>
			<tr align=center>
				<td class="transboxtxt"><a href="index.php">Home</a></td>
				<td class="transboxtxt"><a href="city.php">City</a></td>
				<td class="transboxtxt"><a href="college.php">College</a></td>
				<td class="transboxtxt"><a href="cource_list.php">Course_List</a></td>
				<td class="transboxtxt"><a href="feedback.php">Feedback</a></td>
				<td class="transboxtxt"><a href="inquiry.php">Inquiry</a></td>
				<td class="transboxtxt"><a href="registration.php">Registraion</a></td>
			</tr>
			</table>
		</td>
	</tr>
</table>
</body>
</html>	