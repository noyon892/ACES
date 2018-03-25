<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ACES</title>
   <?php include 'head.php';?>
  </head>
  <body>

    <?php include 'header.php';?>
    <!-- Upcoming events and recent Activities -->

    <div class="container activity" id="activity">
      <div class="row">
        <div class="col-sm-12 recent-activity">
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
