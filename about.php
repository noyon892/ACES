<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>About</title>
    
    <?php include 'head.php';?>
  </head>
  <body>
    <?php include 'header.php';?>


    <!-- Our Mission -->
    <div class="container promo-mission" id="promo-mission">
      <div class="row">
        <div class="col-sm-6 promo-image">
          <figure>
            <img class="img-responsive" src="images/image3.jpg">
          </figure>
        </div>
        <div class="col-sm-6 promo-mission-body visible">
          <h1 class="text-center"><strong>Our Mission</strong></h1>  
           
            <strong>
            <h3>The mission of the ACES targets four main areas:</h3>
            <p class="text-justify"><i class="glyphicon glyphicon-hand-right"></i> Working to increase engineering awareness through its programs and events</p>
            <p class="text-justify"><i class="glyphicon glyphicon-hand-right"></i> Fostering the professional advancement of all engineering student</p>
            <p class="text-justify"><i class="glyphicon glyphicon-hand-right"></i>Improving the quality of life of disadvantaged communities through implementation of environmentally and economically sustainable engineering projects</p>
            <p class="text-justify"><i class="glyphicon glyphicon-hand-right"></i></i> Creating transformative experiences and responsible leaders.</p>
            </strong>
        </div>
      </div> 
      <div class="row">
        
        <div class="col-sm-6 promo-mission-body visible">
          <h1 class="text-center"><strong>Our Mission</strong></h1>  
           
            <strong>
            <h3>The mission of the ACES targets four main areas:</h3>
            <p class="text-justify"><i class="glyphicon glyphicon-hand-right"></i> Working to increase engineering awareness through its programs and events</p>
            <p class="text-justify"><i class="glyphicon glyphicon-hand-right"></i> Fostering the professional advancement of all engineering student</p>
            <p class="text-justify"><i class="glyphicon glyphicon-hand-right"></i>Improving the quality of life of disadvantaged communities through implementation of environmentally and economically sustainable engineering projects</p>
            <p class="text-justify"><i class="glyphicon glyphicon-hand-right"></i></i> Creating transformative experiences and responsible leaders.</p>
            </strong>
        </div>
        <div class="col-sm-6 promo-image">
          <figure>
            <img class="img-responsive" src="images/image3.jpg">
          </figure>
        </div>
      </div>
    </div>

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
