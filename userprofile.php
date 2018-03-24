
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
      <div class="col-md-5">
        <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 toppad" >
           
              <%for(var i=0;i<result.length;i++){%>
                  <div class="panel panel-info">
                    <div class="panel-heading">
                      <h3 class="panel-title"><%=result[i].name%></h3>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                        <div class=" col-md-9 col-lg-9 "> 
                          <table class="table table-user-information">
                            <tbody>
                              <tr>
                                <td>User Name:</td>
                                <td><%=result[i].username%></td>
                              </tr>
                              <tr>
                                <td>Email:</td>
                                <td><%=result[i].email%></td>
                              </tr>
                              <tr>
                                <td>Date of Birth</td>
                                <td><%=result[i].id%></td>
                              </tr>
                           
                                 <tr>
                                     <tr>
                                <td>Gender</td>
                                <td><%=result[i].name%></td>
                              </tr>
                                <tr>
                                <td>Home Address</td>
                                <td><%=result[i].address%></td>
                              </tr>
                              <tr>
                                <td>Email</td>
                                <td><a href="mailto:info@support.com"><%=result[i].email%></a></td>
                              </tr>
                                <td>Phone Number</td>
                                <td><%=result[i].phone%>
                                </td>
                                   
                              </tr>
                             
                            </tbody>
                          </table>
                          
                          <a href="/user/useredit/<%=result[i].username%>" class="btn btn-primary">Edit Profile</a>
                        </div>
                      </div>
                    </div>
                         <div class="panel-footer">
                                <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                                <span class="pull-right">
                                    <a href="/useredit/<%=result[i].id%>" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger" href="/index"><i class="glyphicon glyphicon-remove"></i></a>
                                </span>
                            </div>
                    
                  </div>
                  <%}%>
                </div>
              </div>
            </div>
      </div>
      <div class="col-md-7">
        <h2 class="text-center">Notice Here</h2>
      </div>
    </div>
  </div>
</body>
</html>
