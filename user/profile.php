<?php
	include("header.php");
if(isset($_POST["ok"]))
{
	$id =$_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mno = $_POST['mno'];
	$pswd = $_POST['pswd'];
	$gender = $_POST['gender'];
	$edu = $_POST['edu'];
	$dob = $_POST['dob'];
	$p_name=$_FILES['photo']['name'];
	$p_size=$_FILES['photo']['size'];
	$tmp_name=$_FILES['photo']['tmp_name'];
 	$result=move_uploaded_file($tmp_name,"../upload/".$p_name);

	$q=mysqli_query($cn,"update registration set name = '$name' , email = '$email' , mobile_no = '$mno', password = '$pswd', gender = '$gender', education = '$edu', dob = '$dob', photo = '$p_name' where id='$id'");
	echo "<script> alert('Profile Updated Successfully....')</script>";
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>User Profile</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
<style>
    table.center {
  	margin-left: auto; 
  	margin-right: auto;
    }
</style>
</head>
<body>

<form method="post" action="" enctype="multipart/form-data">
<table class="center" cellspacing=10 cellpadding=10 border=2>
<div class="logo text-center">
  <h1>Edit Profile</h1>
</div>
<br>
<?php
	$mno=$_SESSION['user'];
	$q=mysqli_query($cn,"select * from registration where mobile_no=$mno");
	while($r=mysqli_fetch_array($q))
	{
		echo "<input type='hidden' name='id' value=".$r[0].">";
		echo "<tr><td>Name : </td>";
		echo "<td><input type='text' name='name' value=".$r[1]."></td></tr>";
		echo "<tr><td>E-Mail : </td>";
		echo "<td><input type='text' name='email' value=".$r[2]."></td></tr>";
		echo "<tr><td>Mobile No. : </td>";
		echo "<td><input type='text' name='mno' value=".$r[3]."></td></tr>";
		echo "<tr><td>Your Password : </td>";
		echo "<td><input type='password' name='pswd' value=".$r[4]."></td></tr>";
		echo "<tr><td>Gender : </td>";
		echo "<td>";
		if($r['gender']=="male")
		{
			echo "<input type='radio' name='gender' value='male' checked>Male
			<input type='radio' name='gender' value='female'>Female
			<input type='radio' name='gender' value='other'>Other";
		}
		else if($r['gender']=="female")
		{
			echo "<input type='radio' name='gender' value='male' >Male
			<input type='radio' name='gender' value='female' checked>Female
			<input type='radio' name='gender' value='other'>Other";
		}
		else
		{
			echo "<input type='radio' name='gender' value='male'>Male
			<input type='radio' name='gender' value='female'>Female
			<input type='radio' name='gender' value='other'>Other";
		}
		
		echo "</td></tr>";
		echo "<tr><td>Education Qualification : </td>";
		echo "<td><input type='text' name='edu' value=".$r[6]."></td></tr>";
		echo "<tr><td>Date Of Birth : </td>";
		echo "<td><input type='date' name='dob' value=".$r[7]."></td></tr>";
		echo "<tr><td>Add Photo : </td>";
		echo "<td><input type='file' name='photo'></td></tr>";
	}
	echo "<tr><td colspan=2><button type='submit' name='ok' value='Update Profile'>Update Profile</button></td></tr>";
?>

</form>
</table>
<?php
	include("footer.php");
?>
</body>
</html>
