<?php 
include '../includes/db_conection.php';
 ?>
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
	    <div id="publish_area">
	    <!-- publishing -->
	    <div class="publish">
	    <a href="adduser.php" type="submit" class="btn btn-primary">save</a>
	    <span><a href="adduser.php" type="submit" class="btn btn-primary">Publish</a></span>
	    </div>
	    <!-- categories -->
	    <div class="publish">
	    <form action="submitpost.php" method="post">
	    <div id="category">
	    	<label for="name" name="category">CATEGORIES</label>
	    	 <div class="checkbox">
	    	  <label>
	    	  <input type="checkbox" value="">Sports
	    	  </label> 
	    	 </div>
	    	 <div class="checkbox">
	    	  <label>
	    	  <input type="checkbox" value="">Entertainment
	    	  </label> 
	    	 </div>
	    	 <div class="checkbox">
	    	  <label>
	    	  <input type="checkbox" value="">Politics
	    	  </label> 
	    	 </div>
	    </div> 
	    </div>
	    <!-- text area -->
	    </div>
	     <div id="post_area">
		     <form role="form"> 
			     <div class="form-group"> 
			      <label for="name">Enter title here</label> 
			      <input name="title" type="text" class="form-control" placeholder="Text input"> 
			     </div> 
		     </form>
		     <a href="media.php" type="submit" class="btn btn-primary">Add media</a>

		     <!-- text styles and arrangement -->
		     <div id="text_styles">
		     	
		     </div>
		     <textarea rows="20" cols="100" name="content">
		     	
		     </textarea>
		 </div>
		 </form>
		 </div>
		<!-- dashboard sidemenu -->
		<div id="dashboard_sidemenu">
		   <nav class="nav-sidebar">
		   	<ul class="nav tabs">
		   		<li><a href="writer_menu.php" active>Post</a></li>
		   		<li><a href="writer_editor.php">Edit posts</a></li>
		   		<li><a href="writer_media.php">Media</a></li>
		   		
		   	</ul>
		   </nav>
		</div>
	</div>
 </div>
 <script src="js/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
<?php 
include '../includes/db_conection_close.php';
 ?>
</html>