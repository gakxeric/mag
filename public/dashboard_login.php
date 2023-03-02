 <!DOCTYPE HTML>
<html>
<head>
	<title>Login</title>
	    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="js/routers.js"></script>
</head>
<body>
<div id="login_logo">
	space for the logo
</div>
<center><div id="wrong"></div></center>
<?php include '../includes/login.php' ?>
 <div id="login_form">
	<form class="form-horizontal" id="form" role="form" method="post" > 
	  <div class="form-group"> 
	    <label for="username" class="col-sm-2 control-label">Username</label> 
	    <div class="col-sm-10"> 
	     <input type="username" class="form-control" id="username" name="username" placeholder="Enter Username" required> 
	      </div>
	 </div> 
	 <div class="form-group">
	    <label for="password" class="col-sm-2 control-label">password</label> 
	     <div class="col-sm-10"> 
	     <input type="password" class="form-control" id="password" name="password" placeholder="password" required> 
	     </div> 
	  </div> 
	  <div class="form-group">
		   <div class="col-sm-offset-2 col-sm-10"> 
		   <div class="checkbox"> 
		   <label> <input type="checkbox"> Remember me </label> 
		   </div> </div> 
	  </div> 
	  <div class="form-group"> 
		   <div class="col-sm-offset-2 col-sm-10"> 
		   <input type="submit" class="btn btn-primary" name="login" value="Log In"> 
		   </div>
	    </div> 
	 </form>
 </div>
</body>
<!-- <footer id="footer"></footer> -->
</html>