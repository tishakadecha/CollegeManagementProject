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
  <h1>LOGIN</h1>
</div>
<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Login to your account</h2>
    <form action="loginpro.php" method="POST">
      <div class="input-group">
        <input class="form-control" name="usernm" id="usernm" type="text" placeholder="Mobile No." />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <input class="form-control" name="pass" id="pass" type="password" placeholder="Password" />
        <span class="lighting"></span>
      </div>

      <button type="submit" id="Login">Login</button>
      <div class="clearfix supporter">
        <div class="pull-left remember-me">
          <input id="rememberMe" type="checkbox">
          <label for="rememberMe">Remember Me</label>
        </div>
        <a class="forgot pull-right" href="f_pass.php">Forgot Password?</a>
      </div>
    </form>
  </div>
  <div class="signup-wrapper text-center">
    <a href="registrtion.php">Don't have an accout? <span class="text-primary">Create One</span></a>
  </div>
</div>
</body>
</html>
