<?php
	include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>College</title>
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
</style>
</head>

<body>
		<?php
			$cn=mysqli_connect("localhost","root","","education");
			$cnt = 0;
			$q = mysqli_query($cn,"select * from college");
			echo "<table align='center' style='margin-left:20%'>" ;
			while($r = mysqli_fetch_array($q))
			{
				if($cnt%3 == 0)
				{	
    					echo "<tr><th><a href='collegedisp.php?id=".$r[0]."'><img src='../image/".$r[8]."' class='lnk'><div class=cname>".$r[1]."</div></a></th>";
				}
				else
				{
					echo "<th><a href='collegedisp.php?id=".$r[0]."'><img src='../image/".$r[8]."' class='lnk'><div class=cname>".$r[1]."</div></a></th>";	
				}
				$cnt++;
			}
			echo "</table>";
			?>


</body>
<?php
	include("footer.php");
?>
</html>

	