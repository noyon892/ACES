<!DOCTYPE html>
<html>
 <head>
    <title>Add Member</title>
    <?php include 'head.php';
    session_start();
    	if( $_SESSION['ROLE'] == "admin")
    	{

    	}
    	else{
    		 header("Location: login.php");
    	}
    	?>
  </head>
  <body>
    <?php include 'adminHeader.php';?>
	<!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
	<div class="container font" style="margin-top: 1%;">
	  <div class="row">
			<div class="col-md-5 cal-md-offset-2">
			<h1 class="text-center text-success font"><strong>Create Notice</strong></h1>
			  <div class="tab-content">
			    <div id="home" class="tab-pane fade in active">
					<form method="post">
					  <div class="form-group font">
					    <label for="title" class="font">Title</label>
					    <input type="text" class="form-control font" id="title" name="title">
					  </div>
					  
					  <div class="form-group">
					    <label for="description" class="font">Description:</label>
					    <textarea type="text-area" class="form-control font" id="description" name="description"></textarea>
					  </div>
					  <!-- <input type="submit" class="btn btn-primary btn-lg font" value="Submit"> -->
					  <button type="submit" class="btn btn-primary btn-lg font submit" id="submit">Submit</button>
					</form>
					<br/>
			    </div>
			    </div>
			   </div>
	  		</div>
		</div>
</body>
</html>