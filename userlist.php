<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
   <?php include 'head.php';
   session_start();
      if( $_SESSION['ROLE'] == "admin")
      {

      }
      else{
         header("Location: login.php");
      }
      ?>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<header>
     <?php include 'adminHeader.php';?>
</header>
<div class="panel panel-primary">
    <a href="/logout">
      <button class="btn-success btn pull-right">
        Logout
      </button>
    </a>
  </div>
<h2>User list</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Option</th>
  </tr>
  <%for(var i=0;i<result.length;i++){%>
  <tr>
    <td><%=result[i].id%></td>
    <td><%=result[i].name%></td>
    <td><%=result[i].email%></td>
  </tr>
  <%}%>
  
</table>

</body>
</html>
