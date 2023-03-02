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
				  Search post
				  </button>
				  </span>
				</div>
	    </div>
	    <a href="post.php" type="submit" class="btn btn-primary">New post</a>
	    <div class="notif_buttons">
	    <a href="#"class="btn btn-primary">All &nbsp<span class="badge ">42</span></a>
	    <span><a href="#" class="btn btn-primary">pending &nbsp<span class="badge ">42</span></a></span>
        </div>
        <!-- table of posts -->
        <div>
        	<div class="table-responsive">
        	<?php include '../includes/getpost.php' ?> 
	       <table class="table"> 
	       <caption></caption> 
	       <thead> 
		       <tr> 
		       <th>Title</th> 
		       <th>Status</th> 
		       <th>Author</th>
		       <th>Category</th>
		       <th>Comments</th>
		       <th>Date</th> 
		       </tr>
	        </thead>
	       <tbody> 
	         <?php
	          while( $row = mysql_fetch_array( $result,MYSQL_ASSOC ) ){
	          	$articleId=$row['id'];
	            echo  
	          "<tr>  
		      <td><a href=\"editpost.php?id=$articleId\">{$row['title']}</a></td>
              <td>{$row['status']}</td>
              <td>{$row['author']}</td>
              <td>{$row['category']}</td>
              <td>{$row['coments']}</td>
              <td>{$row['datetime']}</td> 
	         </tr>";
	          }
            ?>
	        </tbody> 
	        </table> 
	        </div>
        </div>
		 </div>
		<!-- dashboard sidemenu -->
		<div id="dashboard_sidemenu">
		   <nav class="nav-sidebar">
		   	<ul class="nav tabs">
		   		<li><a href="admin.php" active>Users</a></li>
		   		<li><a href="editor.php" class="active">Edit posts</a></li>
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