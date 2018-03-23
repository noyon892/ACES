<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ACES</title>
   <?php include 'head.php';?>
  </head>
  <body>

    <?php include 'header.php';?>


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
                      <li class="media">
                          <div class="media-left">
                              <div class="panel panel-danger text-center date">
                                  <div class="panel-heading month">
                                      <span class="panel-title strong">
                                          Mar
                                      </span>
                                  </div>
                                  <div class="panel-body day text-danger">
                                      23
                                  </div>
                              </div>
                          </div>
                          <div class="media-body well no-bg">
                              <h4 class="media-heading">
                                  Pulvinar Mauris Eu
                              </h4>
                              <p>
                                  Vivamus pulvinar mauris eu placerat blandit. In euismod tellus vel ex vestibulum congue.
                              </p>
                          </div>
                      </li>
                      <li class="media">
                          <div class="media-left">
                              <div class="panel panel-danger text-center date">
                                  <div class="panel-heading month">
                                      <span class="panel-title strong">
                                          Jan
                                      </span>
                                  </div>
                                  <div class="panel-body text-danger day">
                                      16
                                  </div>
                              </div>
                          </div>
                          <div class="media-body well no-bg">
                              <h4 class="media-heading">
                                  Aenean Consectetur Ultricies
                              </h4>
                              <p>
                                  Curabitur vel malesuada tortor, sit amet ultricies mauris. Aenean consectetur ultricies luctus.
                              </p>
                          </div>
                      </li>
                      <li class="media">
                          <div class="media-left">
                              <div class="panel panel-danger text-center date">
                                  <div class="panel-heading month">
                                      <span class="panel-title strong all-caps">
                                          Dec
                                      </span>
                                  </div>
                                  <div class="panel-body text-danger day">
                                      8
                                  </div>
                              </div>
                          </div>
                          <div class="media-body well no-bg">
                              <h4 class="media-heading">
                                  Praesent Tincidunt
                              </h4>
                              <p>
                                  Sed convallis dignissim magna et dignissim. Praesent tincidunt sapien eu gravida dignissim.
                              </p>
                          </div>
                      </li>
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
        <div class="col-sm-6 col-sm-offset-3 promo-video">
          <figure>
            <iframe class="center-block" src="https://www.youtube.com/embed/kHP2f5bp_Xc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
