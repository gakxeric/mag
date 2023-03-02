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
	    <div class="notif_buttons">
	    <a href="#"class="btn btn-primary">All &nbsp<span class="badge ">42</span></a>
	    </span>
        </div>
        <!-- table of posts -->
        <div>
        	<div class="table-responsive"> 
	       <table class="table"> 
	       <caption></caption> 
	       <thead> 
		       <tr> 
		       <th>Title</th> 
		       <th>Status</th> 
		       <th>Author</th>
		       <th>Category</th>
		       <th>coments</th>
		       <th>Date</th> 
		       </tr>
	        </thead>
	       <tbody> 
	         <tr> 
		         <td><a href="writer_editpost.php">HELLO WORLD</a></td> 
		         <td>PUBLISHED</td> 
		         <td>Eric</td>
		         <td>Sports</td>
		         <td>22</td>
		         <td>22/04/2015</td>   
	         </tr> 
	         <tr> 
		         <td><a href="">HELLO WORLD</a></td> 
		         <td>PENDING</td> 
		         <td>Eric</td>
		         <td>Sports</td>
		         <td>22</td>
		         <td>22/04/2015</td> 
	          </tr> 
	          <tr> 
		        <td><a href="">HELLO WORLD</a></td> 
		         <td>PUBLISHED</td> 
		         <td>Eric</td>
		         <td>Sports</td>
		         <td>22</td>
		         <td>22/04/2015</td>
	          </tr>
	           <tr> 
		         <td><a href="">HELLO WORLD</a></td> 
		         <td>PUBLISHED</td> 
		         <td>Eric</td>
		         <td>Sports</td>
		         <td>22</td>
		         <td>22/04/2015</td>
	            </tr> 
	        </tbody> 
	        </table> 
	        </div>
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