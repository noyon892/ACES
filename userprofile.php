

    <?php 

    require("db.php");
    session_start();
     
$x=$_SESSION['username'];


$sql = "select * from notice  where type = 'private' ";
$sql1 = "select * from user  where username = '$x' ";

$result = $conn->query($sql);
$result1 = $conn->query($sql1);


        if ($result1->num_rows > 0) {
            // output data of each row
            while($row1 = $result1->fetch_assoc()) {
                $res=$row1;
            }
          }
//var_dump($res);

      


$conn->close();

?>
<!DOCTYPE html>
<html>
<head>
  <title>User Profile</title>
  <?php include 'head.php';?>
</head>
<body>
  <div class="container-fluid">
  <?php include 'userHeader.php';?>
  
    <div class="row">
      <div class="col-sm-5">
        <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 toppad" >
           
              
                  <div class="panel panel-info">
                    <div class="panel-heading">
                      <h3 class="panel-title"><?php echo $res["username"]; ?></h3>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                      
                        <div class=" col-md-9 col-lg-9 "> 
                          <table class="table table-user-information">
                            <tbody>
                              <tr>
                                <td>User Name:</td>
                                <td><?php echo $res["username"]; ?></td>
                              </tr>
                              <tr>
                                <td>Email:</td>
                                <td><?php echo $res["email"]; ?></td>
                            
                                <tr>
                                   <tr>
                                <td>Contact</td>
                                <td><?php echo $res["phone"]; ?></td>
                              </tr>
                                <td>Home Address</td>
                                <td><?php echo $res["address"]; ?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                         <div class="panel-footer">
                                <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                                <span class="pull-right">
                                    <a href="/useredit/<%=result[i].id%>" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit" disabled></i></a>
                                    <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger" href="/index"><i class="glyphicon glyphicon-remove" disabled></i></a>
                                </span>
                            </div>
                    
                  </div>
           
                </div>
              </div>
            </div>
      </div>
      <div class="col-sm-6 col-sm-offset-1 notice">      
                <div class="panel panel-danger my-panel">
                      <div class="panel-heading">
                          <h3 class="panel-title">
                              <i class="fa fa-calendar" aria-hidden="true"></i>
                              Notice
                          </h3>
                      </div>
                      <div class="panel-body my-panel-body">
                          <ul class="media-list">
                            <?php
                              if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
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
                  </div>
              </div>
            </div>
        </div>
    </div>
</body>
</html>
