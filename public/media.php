<!DOCTYPE HTML>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="js/routers.js"></script>
</head>
<body>
<div id="dashboard">
	<div id="dashboard_logo">
		
	</div>
	<div id="dashboard_body">
	<!-- side content -->
	    <div id="admin_content">
	     <div class="search">
	    	<div class="input-group">
				  <input type="text" class="form-control">
				  <span class="input-group-btn">
				  <button class="btn btn-default" type="button">
				  Search
				  </button>
				  </span>
				</div>
	    	</div>
	    	<h3>MEDIA</h3>
	    <form method="post" enctype="multipart/form-data" action="" id="form">
	    <input style="background-color:grey;" type="file" name="image" id="image" ><br/>
	    <span><input type="submit" class="btn btn-primary" value="Upload" name="upload"></span>
	     <span><input type="submit" value="Select" name="select" class="btn btn-primary">
	     </form><br/>
	     <div id="media_space">
	     <div>
         	<?php require ("../includes/uploads.php");

         	?>
         </div>
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
</body>
</html>