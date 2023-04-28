<?php
	include("header.php");
?>
<br><br>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Courses</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <style type="text/css">
      body{
        background: #eee;
        font-family: monospace;
      }
      .header{
        border-radius: 20px 20px 0px 0px;
        padding: 10px 0px;
        background: #1d3030;
        color: #fff;
        width: 100%;
        display: flex;
        align-content: center;
        justify-content: center;
      }
      .course-item{
        margin-bottom: 40px;
        margin-top: 40px;
      }
      .course-body{
        display: none;
        margin-top: 30px;
      }
      .course-wrapper{
        width: 75%;
        margin: 0 auto;
      }
      .course-inner{
        padding: 30px;
        background: aliceblue;
      }
      .course-plus{
        float: right;
        font-size: 1.4em;
        line-height: 1em;
        cursor: pointer;
      }
      hr{
        background-color: #9b9b9b;
      }
      .img-set{
        height:100px; 
        width:10%;
      }
      .box{
         cursor: pointer;
         background: #335757;
         width: 100%;
         border: 0;
         padding: 10px 15px;
         color: #fff;
         font-size: 20px;
         -webkit-transition: 0.3s linear;
         transition: 0.3s linear;
         font-size:22;	
         text-decoration: none;
         text-align: center;
       }
       .box:hover
      {
         color: silver;
         cursor: pointer;
      }
   </style>
  </head>
  <body>
<?php
	$cn=mysqli_connect("localhost","root","","education");
	$cnt = 0;
?>
    <div class="container">
      <div class="row">
        <div class="course-wrapper">
          <div class="header">
            <h1>Courses</h1>
          </div>
          <div class="course-inner">
            <div class="course-item">
              <h3>
                <img class="img-set" src="./image/computer.png">
                <b>INFORMATION TECHNOLOGY ?</b>
                <span class="course-plus">&#8597;</span>
              </h3>
              <div class="course-body">
	<?php
		$q = mysqli_query($cn,"select * from course_list where stream = 'IT'");
		echo "<table border=0>" ;
		while($r = mysqli_fetch_array($q))
		{
    			echo "<tr><a class='box' href='coursepro.php?id=".$r[1]."'>$r[1]</a></tr>";
			$cnt++;
		}
		echo "</table>";
	?>
              </div>
            </div>
            <hr>
            <div class="course-item">
              <h3>
                <img class="img-set" src="./image/arts.png">
                <b>ARTS ?</b>
                <span class="course-plus">&#8597;</span>
              </h3>
              <div class="course-body">
	<?php
		$q = mysqli_query($cn,"select * from course_list where stream = 'Arts'");
		echo "<table border=1 align='center'>" ;
		while($r = mysqli_fetch_array($q))
		{
					
    			echo "<tr><a class='box' href='coursepro.php?id=".$r[1]."'>$r[1]</a></tr>";
			$cnt++;
		}
		echo "</table>";
	?>
              </div>
            </div>
            <hr>
            <div class="course-item">
              <h3>
                <img class="img-set" src="./image/science.png">
                <b>SCIENCE ?</b>
                <span class="course-plus">&#8597;</span>
              </h3>
              <div class="course-body">
	<?php
		$q = mysqli_query($cn,"select * from course_list where stream = 'Science'");
		echo "<table border=1 align='center'>" ;
		while($r = mysqli_fetch_array($q))
		{		
    			echo "<tr><a class='box' href='coursepro.php?id=".$r[1]."'>$r[1]</a></tr>";
			$cnt++;
		}
		echo "</table>";
	?>
              </div>
            </div>
            <hr>
            <div class="course-item">
              <h3>
                <img class="img-set" src="./image/engin.png">
                <b>ENGINEERING ?</b>
                <span class="course-plus">&#8597;</span>
              </h3>
              <div class="course-body">
	<?php
		$q = mysqli_query($cn,"select * from course_list where stream = 'Engineering'");
		echo "<table border=1 align='center'>" ;
		while($r = mysqli_fetch_array($q))
		{		
    			echo "<tr><a class='box' href='coursepro.php?id=".$r[1]."'>$r[1]</a></tr>";
			$cnt++;
		}
		echo "</table>";
	?>
              </div>
            </div>
            <hr>
            <div class="course-item">
              <h3>
                <img class="img-set" src="./image/management.png">
                <b>MANAGEMENT ?</b>
                <span class="course-plus">&#8597;</span>
              </h3>
              <div class="course-body">
	<?php
		$q = mysqli_query($cn,"select * from course_list where stream = 'Management'");
		echo "<table border=1 align='center'>" ;
		while($r = mysqli_fetch_array($q))
		{		
    			echo "<tr><a class='box' href='coursepro.php?id=".$r[1]."'>$r[1]</a></tr>";
			$cnt++;
		}
		echo "</table>";
	?>
              </div>
            </div>
            <hr>
            <div class="course-item">
              <h3>
                <img class="img-set" src="./image/commerce.png">
                <b>COMMERCE ?</b>
                <span class="course-plus">&#8597;</span>
              </h3>
              <div class="course-body">
	<?php
		$q = mysqli_query($cn,"select * from course_list where stream = 'Commerce'");
		echo "<table border=1 align='center'>" ;
		while($r = mysqli_fetch_array($q))
		{		
    			echo "<tr><a class='box' href='coursepro.php?id=".$r[1]."'>$r[1]</a></tr>";
			$cnt++;
		}
		echo "</table>";
	?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      $(".course-plus").on('click',function(){
        $(this).parent().parent().find('.course-body').slideToggle();
      });
    </script>
  </body>
</html>
<br><br>
<?php
	include("footer.php");
?>