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
    require("../includes/getid.php");
    require("../includes/updateuser.php");

    ?>
	     <?php 
	           $row = mysql_fetch_array( $result,MYSQL_ASSOC ); 
echo"
    <div class='user_form'>
    <form class='form-horizontal' role='form' action=\"\" method=\"post\">
    <div class='form-group'> 
     <label for='firstname' class='col-sm-2 control-label'>First name</label> 
		<div class='col-sm-10'> 
         <input type='text' name='firstname' value=".$row['firstname']." >
         </div>
	</div>
	<div class='form-group'> 
     <label for='lastname' class='col-sm-2 control-label'>Last name</label> 
		<div class='col-sm-10'> 
         <input type='text' name='lastname' value=".$row['lastname']." >
         </div>
	</div>
	<div class='form-group'> 
     <label for='username' class='col-sm-2 control-label'>Username</label> 
		<div class='col-sm-10'> 
         <input type='text' name='username' value=".$row['username']." >
         </div>
	</div>
	<div class='form-group'> 
     <label for='displayname' class='col-sm-2 control-label'>Displayame</label> 
		<div class='col-sm-10'> 
         <input type='text' name='displayname' value=".$row['displayname']." >
         </div>
	</div>
	<div class='form-group'> 
     <label for='email' class='col-sm-2 control-label'>Email</label> 
		<div class='col-sm-10'> 
         <input type='text' name='email' value=".$row['email']." >
         </div>
	</div>
	<div class='form-group'> 
     <label for='password' class='col-sm-2 control-label'>Password</label> 
		<div class='col-sm-10'> 
         <input type='text' name='password' value=".$row['password']." >
         </div>
	</div>
	<div class='form-group'> 
     <label for='comfirmpassword' class='col-sm-2 control-label'>Comfirmpassword</label> 
		<div class='col-sm-10'> 
         <input type='text' name='comfirmpassword' value=".$row['comfirmpassword']." >
         </div>
	</div>
    <div class='form-group'>
				   <label for='role' class='col-sm-2 control-label'> Role </label>
				    <div class='col-sm-10'> 
				    <select name=\"role\">
				    <option>".$row['role']."</option> 
				    <option>Administrator</option>
				    <option>Editor</option> 
				    <option>Writer</option>
				    </select> 
				    </div> 
			   </div>
			   <center><input type='submit' class='btn btn-primary' name='updateuser' value='Update user'>
	    <span><input type='submit' class='btn btn-primary' name='deleteuser' value='Remove user'></span></center>
		 </form>
    ";
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
 <script src="js/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>