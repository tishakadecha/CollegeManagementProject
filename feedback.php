<?php include("header.php");?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Feedback Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="logo text-center">
  <h1>Feedback</h1>
</div>
<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Give Your Feedback</h2>
    <form action="feedbackpro.php" method="POST">
      <div class="input-group">
        <input class="form-control" name="name" type="text" placeholder="Your Name" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <input class="form-control" name="email" type="text" placeholder="E-Mail" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <input class="form-control" name="cno" type="text" placeholder="Mobile No" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <input class="form-control" name="msg" type="text" placeholder="Message" />
        <span class="lighting"></span>
      </div>

      <button type="submit" name="submit" value="submit">Send</button>
    </form>
  </div>
    <div class="signup-wrapper text-center">
    <span class="text-primary">Thanks For Sharing Your Feedback ! </span>
  </div>
</div>
</div>
</body>
</html>

<?php include("footer.php");?>