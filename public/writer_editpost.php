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
	    <a href="adduser.php" type="submit" class="btn btn-primary">Update</a>
	    <span><a href="adduser.php" type="submit" class="btn btn-primary">Delete</a></span>
	    </div>
	    <!-- categories -->
	    <div class="publish">
	    <div id="category">
	    	<label for="name">CATEGORIES</label>
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
			      <input type="text" class="form-control" placeholder="Text input"> 
			     </div> 
		     </form>
		     <a href="media.php" type="submit" class="btn btn-primary">Add media</a>

		     <!-- text styles and arrangement -->
		     <div id="text_styles">
		     	
		     </div>
		     <textarea rows="20" cols="100">
		     	
		     </textarea>
		 </div>
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
</html>