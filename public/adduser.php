<!DOCTYPE HTML>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="js/angular.min.js"></script>
</head>
<body>
<div id="dashboard">
	<div id="dashboard_logo">
		
	</div>
	<div id="dashboard_body">
	<!-- side content -->
	    <div id="admin_content">
	    <div class="user_form">
	    <?php include '../includes/submit.php' ?>
	     <form class="form-horizontal" role="form" action="" method="post" > 
			  <div class="form-group"> 
			    <label for="firstname" class="col-sm-2 control-label">First name</label> 
			    <div class="col-sm-10"> 
			     <input name="firstname" type="text" class="form-control" id="firstname" placeholder="Enter full names"> 
			      </div>
			 </div>
			 <div class="form-group"> 
			    <label for="lastname" class="col-sm-2 control-label">Last name</label> 
			    <div class="col-sm-10"> 
			     <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Enter full names"> 
			      </div>
			 </div>
			 <div class="form-group"> 
			    <label for="username" class="col-sm-2 control-label">User name</label> 
			    <div class="col-sm-10"> 
			     <input name="username" type="text" class="form-control" id="username" placeholder="Enter user name"> 
			      </div>
			 </div>
			 <div class="form-group"> 
			    <label for="displayname" class="col-sm-2 control-label">Display name</label> 
			    <div class="col-sm-10"> 
			     <input name="displayname" type="text" class="form-control" id="displayname" placeholder="Enter display name"> 
			      </div>
			 </div>
			 <div class="form-group"> 
			    <label for="email" class="col-sm-2 control-label">Email</label> 
			    <div class="col-sm-10"> 
			     <input name="email" type="email" class="form-control" id="email" placeholder="Enter email"> 
			      </div>
			 </div> 
			 <div class="form-group">
			    <label for="password" class="col-sm-2 control-label">Password</label> 
			     <div class="col-sm-10"> 
			     <input name="password" type="password" class="form-control" id="password" placeholder="password"> 
			     </div> 
			  </div>
			  <div class="form-group">
			    <label for="confirmpassword" class="col-sm-2 control-label">Confirm password</label> 
			     <div class="col-sm-10"> 
			     <input name="comfirmpassword" type="password" class="form-control" id="confirmpassword" placeholder="confirm password"> 
			     </div> 
			  </div>
			  <div class="form-group">
				   <label for="role" class="col-sm-2 control-label"> Role </label>
				    <div class="col-sm-10"> 
				    <select name="role"> 
				    <option>Administrator</option>
				    <option>Editor</option> 
				    <option>Writer</option>
				    </select> 
				    </div> 
			   </div> 
			   <center><input  type="submit" class="btn btn-primary" name="submit" value="Add user">
	    <span><a href="admin.php" type="submit" class="btn btn-primary">Cancel</a></span></center>
		 </form>
		 <br/><center><div id="message"></div></center>
		 </div> 
		 </div>
		<!-- dashboard sidemenu -->
		<div id="dashboard_sidemenu">
		   <nav class="nav-sidebar">
		   	<ul class="nav tabs">
		   		<li><a href="admin.php" active>Users</a></li>
		   		<li><a href="editor.php">Edit posts</a></li>
		   		<li><a href="media.php">Media</a></li>
		   		<li><a href="post.php">Post</a></li>
		   	</ul>
		   </nav>
		</div>
	</div>
 </div>
 <script src="js/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
 <script src="js/submit.js"></script>
</body>

</html>