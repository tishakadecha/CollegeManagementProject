<?php
  include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
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
</style>
</head>
<body>
<!--<img src="image/home.jpg" class="lnk">
<img src="image/college1.jpg" class="lnk">
<img src="image/course.jpg" class="lnk">
<img src="image/faq.jpg" class="lnk">
<img src="image/feedback.jpg" class="lnk">
</body>-->
<?php
  echo "<center>";
  include("links.php");
  echo "</center>";
  include("footer.php");
?>
</html>
