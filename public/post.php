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
	    <?php include '../includes/submitpost.php' ?>
	    <form role="form" action="" method="post">
	    <div id="publish_area">
	    <!-- publishing -->
	    <div class="publish">
	    <input name="save" type="submit" class="btn btn-primary" value="save">
	    <span><input name="publish" type="submit" class="btn btn-primary" value="Publish"></span>
	    </div>
	    <!-- categories -->
	    <div class="publish">
	    <div id="category" name="category">
	    	<label for="category">CATEGORIES</label><br/>
             <input type="radio" id="1" name="category" value="sport">sport<br/>
             <input type="radio" id="2" name="category" value="Entertainment">Entertainment<br/>
             <input type="radio" id="3" name="category" value="drama">drama<br/>
             <input type="radio" id="4" name="category" value="fiction">fiction<br/>
	    	 
	    </div> 
	    </div>
	    <!-- text area -->
	    </div>
	     <div id="post_area">
			     <div class="form-group">
			     <div id="article_message"></div> 
			      <label for="name">Enter title here</label> 
			      <input name="title" type="text" class="form-control" placeholder="Text input"> 
			     </div> 
		     <a href="#" onclick="media()" class="btn btn-primary" >Add media</a>

		     <!-- text styles and arrangement -->
		     <div id="text_styles">
		     	
		     </div>
		     <textarea rows="20" cols="100" name="content" id="content">
		     	
		     </textarea>
		 </div>
		 </form>
		 <div id="uploads">
	     
         	<?php require ("../includes/getmedia.php");

         	?>
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
 <script>
function media(){
	document.getElementById("uploads").style.display="block";	
}
 </script>
 <script src="js/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
<?php 
include '../includes/db_conection_close.php';
 ?>
</html>