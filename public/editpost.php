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
	    <?php
	    require("../includes/db_conection.php");   
	     require("../includes/getartid.php");
          require("../includes/updateuser.php");

        ?>
	    
	    <!-- text area -->
	    

<?php 
	           $row = mysql_fetch_array( $result,MYSQL_ASSOC ); 
echo"

			     <form role=\"form\" action=\"\" method=\"post\">
					<div id=\"publish_area\">
						    <!-- publishing -->
						    <div class=\"publish\">
						    <div>
						     <input type=\"submit\" class=\"btn btn-primary\" name=\"updatepost\" value=\"Update\">
					         <span><input type=\"submit\" class=\"btn btn-primary\" name=\"deletepost\" value=\"Delete\"></span> 
						    </div><hr/>
						    <!-- categories -->
						    <div id=\"category\">
						    	<label for=\"category\">CATEGORIES</label><br/>
					             <input type=\"radio\" id=\"1\" name=\"category\" value=\"sport\">sport<br/>
					             <input type=\"radio\" id=\"2\" name=\"category\" value=\"Entertainment\">Entertainment<br/>
					             <input type=\"radio\" id=\"3\" name=\"category\" value=\"drama\">drama<br/>
					             <input type=\"radio\" id=\"4\" name=\"category\" value=\"fiction\">fiction<br/>
						    </div> 
						    </div>
						    </div>
			<div id=\"post_area\">
			     <div class=\"form-group\"> 
			      <label for=\"name\">Enter title here</label> 
			      <input type=\"text\" class=\"form-control\" name=\"title\"value=".$row['title']."> 
			     </div> 
		     
		     <a href=\"media.php\" type=\"submit\" class=\"btn btn-primary\">Add media</a>

		     <!-- text styles and arrangement -->
		     <div id=\"text_styles\">
		     	
		     </div>
		     <textarea rows=\"20\" cols=\"100\" name=\"content\" >
		      ".$row['content']."
		     </textarea>
		    </div>  

		     </form>";
		     ?>
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