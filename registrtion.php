<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registration form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="logo text-center">
  <h1>SIGN UP</h1>
</div>
<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Create An Account</h2>
    <form action="regprocess.php" method="POST" enctype="multipart/form-data">
      <div class="input-group">
        <input class="form-control" name="nm" id="nm" type="text" placeholder="User Name" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <input class="form-control" name="email" id="email" type="text" placeholder="E-Mail" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <input class="form-control" name="mno" id="mno" type="text" placeholder="Mobile No" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <input class="form-control" name="ps" id="ps" type="password" placeholder="Password" />
        <span class="lighting"></span>
      </div>

      <button type="submit" name="sub" id="Submit">Sign Up</button>
      <div class="clearfix supporter">
        <div class="pull-left remember-me">
          <input id="rememberMe" type="checkbox">
          <label for="rememberMe">Remember Me</label>
        </div>
      </div>
    </form>
  </div>
    <div class="signup-wrapper text-center">
    <a href="login.php">Already have an accout? <span class="text-primary">Login</span></a>
  </div>

</body>
</html>
