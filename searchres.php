<?php
	include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colleges</title>
<style>
.lnk
{
  height:250;width:250;border-radius:10px;border:1px solid black;
  box-shadow:0px 0px 15px black;margin:20px;
}
.lnk:hover
{
 box-shadow:0px 0px 0px;
 border:0;
}
a{text-decoration: none;color: black;font-family: arial}
.cname{width: 250px;text-align: center;}
.tbl-center{
margin-left:auto;
margin-right:auto;
}
</style>
</head>
<body>
		<?php
			if(isset($_POST['submit']))
			{
			$snm=$_POST['snm'];
			$cn=mysqli_connect("localhost","root","","education");
			$cnt = 0;
			$q = mysqli_query($cn,"select * from college where city like'".$snm."' or name like '".$snm."' or unversity_name like '".$snm."' or courses like '%".$snm."%'");
			echo "<table align='tbl-center'>" ;
			while($r = mysqli_fetch_array($q))
			{
				if($cnt%3 == 0)
				{	
    					echo "<tr><td><a href='collegedisp.php?id=".$r[0]."'><img class='lnk' src=' image/".$r[8]."' width='250px' height='250px'><div class=cname>".$r[1]."</div></a></td>";
				}
				else
				{
					echo "<td><a href='collegedisp.php?id=".$r[0]."'><img class='lnk' src=' image/".$r[8]."' width='250px' height='250px'><div class=cname>".$r[1]."</div></a></td>";	
				}
				$cnt++;
			}
			echo "</table>";
			}
		?>


</body>
<?php
	include("footer.php");
?>
</html>

	