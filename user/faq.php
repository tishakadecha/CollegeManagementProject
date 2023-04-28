<?php include"header.php";?>
<br><br>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FAQ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
      .faq-item{
        margin-bottom: 40px;
        margin-top: 40px;
      }
      .faq-body{
        display: none;
        margin-top: 30px;
      }
      .faq-wrapper{
        width: 75%;
        margin: 0 auto;
      }
      .faq-inner{
        padding: 30px;
        background: aliceblue;
      }
      .faq-plus{
        float: right;
        font-size: 1.4em;
        line-height: 1em;
        cursor: pointer;
      }
      hr{
        background-color: #9b9b9b;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="faq-wrapper">
          <div class="header">
            <h1>FAQs</h1>
          </div>
          <div class="faq-inner">
            <div class="faq-item">
              <h3>
                What is an Registration Process ?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
                Currently You Can Send Your Inquiry after Sign up in Our Website, than College will contact you and They provide you registration process..  
              </div>
            </div>
            <hr>
            <div class="faq-item">
              <h3>
                Is it possible to take a Professional Degree program without first earning bachelor's degree ?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
                Yes, But they are highly selective and require a heavy course load across a total six years of study.
              </div>
            </div>
            <hr>
            <div class="faq-item">
              <h3>
                Did you recieve my Transcript ?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
                Yes, we recieve your transcript.
              </div>
            </div>
            <hr>
            <div class="faq-item">
              <h3>
                Do you have service for students with disabilities ?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
                No, Sorry we don't have Service for students disabilities.
              </div>
            </div>
            <hr>
            <div class="faq-item">
              <h3>
                When will I recieve my Admission Process E-mail ?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
                Dear, We inform you as soon as possible.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      $(".faq-plus").on('click',function(){
        $(this).parent().parent().find('.faq-body').slideToggle();
      });
    </script>
  </body>
</html>
<br><br>
<?php include"footer.php";?> 