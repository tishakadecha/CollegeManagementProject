<?php
	$cn=mysqli_connect("localhost","root","","education");
?>
<form action="inqpro.php" method="POST">
	<table height=50% border="2" align="center">
    <caption><h3> INQUIRY FORM </h3></caption>
        <tr>
			<td>College Name :</td>
			<td><input type="text" name="cname" placeholder="Full Name" size=28 required></td>
		</tr>
        <tr>
			<td>Course Is :</td>
			<td><input type="text" name="courseis" placeholder="Enter Email.." size=28 required></td>
		</tr>	
		<tr>
			<td>User Name :</td>
			<td><input type="text" name="uname" placeholder="Enter Email.." size=28 required></td>
		</tr>
		<tr>
			<td>E-mail :</td>
			<td><input type="text" name="email" placeholder="Enter Contact No.." size=28 required></td>
		</tr>
		<tr>
			<td>Contact No. :</td>
			<td><input type="text" name="cno" placeholder="Enter Feedback.." size=28 required></td>
		</tr>
		<tr>
		<td align=center colspan=2><input type="submit" value="send" name="submit"></td>
		</tr>
	</table>
</form>
