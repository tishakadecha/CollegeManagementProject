<?php
	include("header.php");
	$cn=mysqli_connect("localhost","root","","education");
	$cnm=$_GET['cnm'];
	$clnm=$_GET['clnm'];
	$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Inquiry Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="logo text-center">
  <h1>Inquiry Form</h1>
</div>
<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Send Your Inquiry..?</h2>
    <form action="inqpro.php" method="POST">
      <div class="input-group">
        <input class="form-control" name="cnm" placeholder="College Name" size=28 required value="<?php echo $clnm; ?>" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <input class="form-control" name="coursenm" placeholder="Coures Name.." size=28 required value="<?php echo $cnm; ?>" />
        <span class="lighting"></span>
      </div>
      <?php
	$q=mysqli_query($cn,"select * from registration where mobile_no='$user'");
	while($u=mysqli_fetch_array($q))
	{
		$nm=$u[1];
		$em=$u[2];
	}
      ?>	
      <div class="input-group">
        <input class="form-control" name="usernm" placeholder="User Name" size=28 required value="<?php echo $nm;?>" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <input class="form-control" name="email" placeholder="E-mail" size=28 required value="<?php echo $em;?>" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <input class="form-control" name="mno" placeholder="Contact No." size=28 required value="<?php echo $user; ?>" />
        <span class="lighting"></span>
      </div>
      <input type="hidden" name="id" value="<?php echo $id;?>">
      <button type="submit" value="submit" name="submit">Submit</button>
    </form>
  </div>
    <div class="signup-wrapper text-center">
    <span class="text-primary">Thanks For Your Inquiry!! </span>
  </div>
</div>
</div>
</body>
</html>

<?php include("footer.php");?>