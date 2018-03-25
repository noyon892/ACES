<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ACES</title>
   <?php include 'head.php';?>
  </head>
  <body>

    <?php include 'header.php';?>

    <?php 

    require("db.php");



$sql = "select * from notice  where type = 'public' ";



$result = $conn->query($sql);

$conn->close();

?>




    


    <!-- Carosoul -->
    <div class="container-fluid no-pad">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/image2.jpg" alt="Slide_Image_1">
            <div class="carousel-caption my-carousel-caption slide-one-text">
                <!-- <h1><strong>AIUB Community of Engineering Students-ACES</strong></h1>
                <p><strong></strong></p> -->
            </div>
          </div>
          <div class="item">
            <img src="images/image1.jpg" alt="Slide_Image_2">
            <div class="carousel-caption my-carousel-caption slide-three-text">
<!--               <h2><strong>AIUB Community of Engineering Students-ACES</strong></h2>
              <p><strong></strong></p> -->
            </div>
          </div>
          <div class="item">
            <img src="images/image2.jpg" alt="Slide_Image_3">
            <div class="carousel-caption my-carousel-caption slide-three-text">
              <!-- <h2><strong>AIUB Community of Engineering Students-ACES</strong></h2>
              <p><strong></strong></p> -->
            </div>
          </div>
          <div class="item">
            <img src="images/image1.jpg" alt="Slide_Image_4">
            <div class="carousel-caption my-carousel-caption slide-two-text">
              <!-- <h2><strong>AIUB Community of Engineering Students-ACES</strong></h2>
              <p><strong></strong></p> -->
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <i class="fa fa-angle-left my-fa" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <i class="fa fa-angle-right my-fa" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!-- welcome -->
    <div class="container-fluid welcome" id="welcome">
      <div class="container">
        <h1 class="text-left"><strong>Welcome</strong></h1>  
        <p class="text-justify">
          <strong>
           It's a professional student organization in providing excellent welfare and services as well as acquiring academic excellence for the engineering students.It's a professional student organization in providing excellent welfare and services as well as acquiring academic excellence for the engineering students.It's a professional student organization in providing excellent welfare and services as well as acquiring academic excellence for the engineering students.It's a professional student organization in providing excellent welfare and services as well as acquiring academic excellence for the engineering students.
          </strong>
        </p>
      </div>
    </div>
    

    <!-- Upcoming events and recent Activities -->

    <div class="container-fluid activity" id="activity">
      <div class="row">
        <div class="col-sm-4 recent-events">
          <!-- Container, Row, and Column used for illustration purposes -->
          <!-- Fluid width widget -->        
        <div class="panel panel-danger my-panel">
              <div class="panel-heading">
                  <h3 class="panel-title">
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                      Upcoming Events
                  </h3>
              </div>
              <div class="panel-body my-panel-body">
                  <ul class="media-list">

                    <?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      //var_dump($row);
     
             echo  "<li class=" . "'media'" . ">";
                 echo       " <div class=" . "'media-left'" . ">";
                    echo         " <div class=" . "'panel panel-danger text-center date'" . ">";
                         echo         "<div class=" . "'panel-heading month'" . ">";
                           echo           "<span class=" . "'panel-title strong'" . ">";
                              echo          $row["date"];
                                echo     " </span>";
                                echo "</div>";
                                
                            echo  "</div>";
                          echo "</div>";
                        echo   "<div class=" . "'media-body well no-bg'" . ">";
                        echo      "<div class=" . "'panel-heading no-pad'" . ">";
                         echo             "<span class=" . "'panel-title strong all-caps'" . ">";
                           echo               "<h4>" . $row["title"] . "</h4>";
                            echo          "</span>";
                           echo   "</div>";
                          echo    "<hr class=" . "'no-margin'" . ">";
                         echo     "<div class=" . "'panel-body text-default no-pad'" .">";
                         echo        "<p>". $row["description"] ."</p>";
                          echo    "</div>";
                       echo   "</div>";
                   echo   "</li>";
      
    }
} 


             

                      ?>
                   
                    </ul>
                  <a href="#" class="btn btn-warning btn-block">More Events »</a>
              </div>
          </div>
          <!-- End fluid width widget --> 
        </div>

        <div class="col-sm-8 recent-activity">
          <h2 class="text-center">Recent Activities</h2>
            <div class="row center-block">
                <div class="span12">
                    <div class="well no-bg">
                        <div id="myCarousel" class="carousel fdi-Carousel slide">
                         <!-- Carousel items -->
                            <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
                                <div class="carousel-inner onebyone-carosel">
                                    <div class="item act active">
                                        <div class="col-sm-4">
                                            <a href="#"><img src="images/image3.jpg" class="img-responsive center-block"></a>
                                            <div class="text-center"><h3>Activity 1</h3>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                                        </div>
                                    </div>
                                    <div class="item act">
                                        <div class="col-sm-4">
                                            <a href="#"><img src="images/image3.jpg" class="img-responsive center-block"></a>
                                            <div class="text-center"><h3>Activity 2</h3>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                                        </div>
                                    </div>
                                    <div class="item act">
                                        <div class="col-sm-4">
                                            <a href="#"><img src="images/image3.jpg" class="img-responsive center-block"></a>
                                            <div class="text-center"><h3>Activity 3</h3>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                                        </div>
                                    </div>
                                    <div class="item act">
                                        <div class="col-sm-4">
                                            <a href="#"><img src="images/image3.jpg" class="img-responsive center-block"></a>
                                            <div class="text-center"><h3>Activity 4</h3>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                                        </div>
                                    </div>
                                    <div class="item act">
                                        <div class="col-sm-4">
                                            <a href="#"><img src="images/image3.jpg" class="img-responsive center-block"></a>
                                            <div class="text-center"><h3>Activity 5</h3>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                                        </div>
                                    </div>
                                    <div class="item act">
                                        <div class="col-sm-4">
                                            <a href="#"><img src="images/image3.jpg" class="img-responsive center-block"></a>
                                            <div class="text-center"><h3>Activity 6</h3>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#eventCarousel" data-slide="prev"></a>
                                <a class="right carousel-control" href="#eventCarousel" data-slide="next"></a>
                            </div>
                            <!--/carousel-inner-->
                        </div><!--/myCarousel-->
                    </div><!--/well-->
                </div>
            </div>
      </div>
    </div>
</div>
    <!-- Our Mission -->
    <div class="container promo-mission" id="promo-mission">
      <div class="row">
       
       <div class="col-sm-4">
         <h1 class="text-center promo-text">Watch Our Promo Video</h1>
       </div>
        <div class="col-sm-6 promo-video">
          <figure>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/TxZcO00iBpQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </figure>
        </div>
      </div>
    </div>


    <!-- //Footer -->
    <?php include 'footer.php';?>
  

       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- <script src="js/wow.min.js"></script> -->
    <script src="js/myjs.js"></script>
    <!-- Js For Thumbnail Caoursel -->
    <script type="text/javascript">
      $(document).ready(function () {
          $('#myCarousel').carousel({
              interval: 10000
          })
          $('.fdi-Carousel .item').each(function () {
              var next = $(this).next();
              if (!next.length) {
                  next = $(this).siblings(':first');
              }
              next.children(':first-child').clone().appendTo($(this));

              if (next.next().length > 0) {
                  next.next().children(':first-child').clone().appendTo($(this));
              }
              else {
                  $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
              }
          });
      });
    </script>
  </body>
</html>
