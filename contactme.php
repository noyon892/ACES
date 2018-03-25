<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Me</title>
   <?php include 'head.php';?>
   <style>
      
     #loading-img{
     display:none;
     width: 70px;
     height: 70px;
     }
      
     .response_msg{
     margin-top:10px;
     font-size:13px;
     background:#E5D669;
     color:#ffffff;
     width:250px;
     padding:3px;
     display:none;
     }
    #contact-form{
      padding: 20px;
    }
   </style>
  </head>
  <body>

    <?php include 'header.php';?>
     
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1><img src="images/Inquiry.png" width="80px">Contact Us</h1>
          <div class="response_msg"></div>
          <form name="contact-form" action="" method="post" id="contact-form">
            <div class="form-group">
              <label for="Name">Name</label>
              <input type="text" class="form-control" name="your_name" placeholder="Name" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" name="your_email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <label for="Phone">Phone</label>
              <input type="text" class="form-control" name="your_phone" placeholder="Phone" required>
            </div>
            <div class="form-group">
              <label for="comments">Comments</label>
              <textarea name="comments" class="form-control" rows="3" cols="28" rows="5" placeholder="Comments"></textarea> 
            </div>
            <img src="images/loading.gif" id="loading-img">
            <button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
      $("#contact-form").on("submit",function(e){
      e.preventDefault();
      if($("#contact-form [name='your_name']").val() === '')
        {
        $("#contact-form [name='your_name']").css("border","1px solid red");
        }
      else if ($("#contact-form [name='your_email']").val() === '')
        {
        $("#contact-form [name='your_email']").css("border","1px solid red");
        }
      else
      {
        $("#loading-img").css("display","block");
        var sendData = $( this ).serialize();
        $.ajax({
        type: "POST",
        url: "contactme.php",
        data: sendData,
        success: function(data){
          $("#loading-img").css("display","none");
          $("#contact-form").find("input[type=text], input[type=email], textarea").val("");
          }
        });
      }
      });
       
      $("#contact-form input").blur(function(){
      var checkValue = $(this).val();
      if(checkValue != '')
      {
      $(this).css("border","1px solid #eeeeee");
      }
      });
      });
    </script>

    <!-- //Footer -->
    <?php include 'footer.php';?>
  </body>
</html>


<?php 
require_once("db.php");
if((isset($_POST['your_name'])&& $_POST['your_name'] !='') && (isset($_POST['your_email'])&& $_POST['your_email'] !=''))
{
  require_once("contact_mail.php");
  $yourName = $conn->real_escape_string($_POST['your_name']);
  $yourEmail = $conn->real_escape_string($_POST['your_email']);
  $yourPhone = $conn->real_escape_string($_POST['your_phone']);
  $comments = $conn->real_escape_string($_POST['comments']);
   
  $sql="INSERT INTO contact_form_info (name, email, phone, comments) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$comments."')";

  if(!$result = $conn->query($sql)){
    die('There was an error running the query [' . $conn->error . ']');
  }
  else
  {
    echo "Thank you! We will contact you soon";
  }
}
else
  {
    echo "Please fill Name and Email";
  }
?>