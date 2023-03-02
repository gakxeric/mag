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
<!-- logo -->

	<div id="dashboard_logo">
	<?php include '../includes/login.php'; ?>
	<?php echo htmlspecialchars( $_SESSION['username']) ?>
	<a href="dashboard_login.php">logout</a>
	</div>
	<div id="dashboard_body">
	<!-- side content -->
	    <div id="admin_content">
	    <?php require("../includes/gettable.php"); ?>
	    <div id="useradd"></div>
	      <div class="table-responsive"> 
	       <table class="table"> 
	       <caption>USERS</caption> 
	       <thead> 
		       <tr> 
		       <th>First name</th>
		       <th>Last name</th>  
		       <th>Username</th>
		       <th>Displayname</th> 
		       <th>Email</th>
		       <th>Password</th>
		       <th>Comfirmpassword</th>
		       <th>role</th> 
		       </tr>
	        </thead>
	       <tbody>
	       <?php
	          while( $row = mysql_fetch_array( $result,MYSQL_ASSOC ) ){
	          	$userId=$row['id'];
	            echo  
	          "<tr>  
		      <td><a href=\"edituser.php?id=$userId\">{$row['firstname']}</a></td>
              <td>{$row['lastname']}</td>
              <td>{$row['username']}</td>
              <td>{$row['displayname']}</td>
              <td>{$row['email']}</td>
              <td>{$row['password']}</td>
              <td>{$row['comfirmpassword']}</td>
              <td>{$row['role']}</td> 
	         </tr>";
	          }
            ?>
	        </tbody> 
	        </table> 
	        </div>
	        <a href="adduser.php" type="submit" class="btn btn-primary">Add new user</a>
		 </div>
		<!-- dashboard sidemenu -->
		<div id="dashboard_sidemenu">
		   <nav class="nav-sidebar">
		   	<ul class="nav tabs">
		   		<li><a href="admin.php" class="active">Users</a></li>
		   		<li><a href="editor.php">Edit posts</a></li>
		   		<li><a href="media.php">Media</a></li>
		   		<li><a href="post.php">Post</a></li>
		   		<li><a href="../hitcounter/view.php">Page views</a></li>
		   	</ul>
		   </nav>
		</div>
	</div>
 </div>
 <script src="js/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>