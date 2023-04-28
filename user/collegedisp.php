<?php include("header.php");?>
<html>
<head>
  <meta charset="UTF-8">
  <title>College Display</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./style.css">
   <style>
    	.center {
  	   margin-left: auto; 
  	   margin-right: auto;
	   width:95%;
                   }
	.text {
  	   font-size: 21; 
	   background:#1d3030; 
                      color:white;
                   }
	.text2 {
  	   font-size: 19; 
                   }
	.color{
  	   background: #00A885; 
	   color:white;
                   }
</style>
</head>
<body>
<table class="center">
	<tr>
		<td>
			<?php
				$cn=mysqli_connect("localhost","root","","education");
				$id = $_GET['id'];
				$q = mysqli_query($cn,"select * from college where id='$id'");
				$r = mysqli_fetch_row($q);
				echo "<table class='center' border=1 class='text'>";
				echo "<tr><td align=center><img src='../image/".$r[8]."' width=70% height=350px></td>
				<td>
				<li type='none'><font size='+3' color='maroon'> College Name: <font size='+2' color='black'>".$r[1]."</li> </font>
				<font size='+3' color='maroon'> City :<font size='+2' color='black'> ".$r[2]."</li>
				<li type='none'><font size='+3' color='maroon'> Faculty : <font size='+2' color='black'> ".$r[4]."</li>
				<li type='none'><font size='+3' color='maroon'> E-mail :	 <font size='+2' color='black'> ".$r[5]."</li>
				<li type='none'><font size='+3' color='maroon'> University : <font size='+2' color='black'> ".$r[6]."</li></td></tr></table>";
				$course=explode(",",$r[7]);
			?>
 			
		</td>
	</tr>
</table>
<br><br>
 <table class="center" cellspacing=6 cellpadding=5 border=1>
		<tr class="color"><th colspan=5><h1> List Of Courses</h1></th></tr>
	<tr class="text" >
	    	 <th>Cource Name</th>
		 <th>Duration</th>
		 <th>Eligibility</th>
		 <th>Intact Capisity</th>
		 <th>For Inquiry</th>
	</tr>
		<?php
			foreach($course as $c)
			{
				$q1 = mysqli_query($cn,"select * from course_list where name like '$c'");						
				while($r1 = mysqli_fetch_array($q1))
				{
					echo "<tr class='text2'> <td>".$r1[1]."</td><td>".$r1[2]."</td><td>".$r1[3]."</td><td>".$r1[4]."</td><td><a href='inquiry.php'><button type='submit' >INQUIRY</button></a></td></tr>";
				}
			}
		?>
</table>
<br><br>
</body>
</html>
<?php include("footer.php")?>
