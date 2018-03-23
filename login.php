<!DOCTYPE html>
<html lang="en">
  <head>
    <title>User Login</title>
    <?php include 'head.php';?>
  </head>
  <body>

    <?php include 'header.php';?>

    <div class="container">
        <div class="row">
            <div class="col-md-7">
              <img class="img-responsive" src="images/image3.jpg">
            </div>
            <div class="col-md-5 login-panel">
              <div class="row">
                <div class="full-panel">
                    <div class="panel panel-primary">
                        <div class="panel-heading font">
                            <span class="glyphicon glyphicon-lock"></span> Login</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="post">
                              <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-3 control-label font">
                                      Username</label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control font" id="inputEmail3" placeholder="Username" name="username">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputPassword3" class="col-sm-3 control-label font">
                                      Password</label>
                                  <div class="col-sm-9">
                                      <input type="password" class="form-control font" id="inputPassword3" placeholder="Password" name="password">
                                  </div>
                              </div>
                              <div class="form-group last">
                                  <div class="col-sm-offset-3 col-sm-9">
                                      <button type="submit" class="btn btn-success btn-sm font glyphicon glyphicon-log-in"> Login</button>
                                         <button type="reset" class="btn btn-default btn-sm font">
                                        Reset</button>
                                  </div>
                              </div>
                            </form>
                          <button type="submit" class=" pull-right btn-link font" disabled><a href="www.google.com">Forget password</a></button><br>
                        </div>
                        <div class="panel-footer font">
                        
                        </div>
                    </div>
                </div>
              </div>
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
