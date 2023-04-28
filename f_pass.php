<?php
$msg="";
    if(isset($_POST["ok"]))
    {
        if($_POST["f_pass"]!="")
        {
            $cn=mysqli_connect("localhost","root","","education");
            $q="select * from registration where mobile_no='".$_POST["f_pass"]."'";
            $r=mysqli_query($cn,$q);
            $row=mysqli_fetch_row($r);
            if($row>0)
            {
                $msg="Password is".$row[4];
            }
            else
            {
                $msg="Mobile is not Registered.";
            }
            mysqli_close($cn);
        }
        else
        {
            $msg="Please enter mobile no.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="logo text-center">
  <h1>Forgot Password?</h1>
</div>
<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Get Password</h2>
    <form method="POST">
      <div class="input-group">
        <input class="form-control" name="f_pass" id="f_pass" type="text" placeholder="Registered Mobile Number" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <input class="form-control" name="pass" id="pass" type="text" value="<?php echo $msg;?>" />
        <span class="lighting"></span>
      </div>

      <button type="submit" value="Get Password" name="ok">Show</button>
  <div class="signup-wrapper text-center">
    <a href="login.php">Go To Login Form! <span class="text-primary">Login</span></a>
  </div>
</body>
</html>
