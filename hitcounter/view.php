<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>Hit viewer</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../public/style/style.css">
	<link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.min.css">

</head>
<body>
<div id="dashboard">
	<div id="dashboard_logo">
		
	</div>
	<div id="dashboard_body">
	<!-- side content -->
	    <div id="admin_content">
<?php
	include("counter_config.php");
	
// ###########################
// ### Connect to database ###
// ###########################

$link = mysql_connect($localhost, $dbuser, $dbpass); 
if (!$link) 
	{
	    die('Could not connect to database : ' . mysql_error());
	}
$db_selected = mysql_select_db($dbname, $link);

if (!$db_selected) 
	{
	    die ('Can\'t use database : ' . mysql_error());
	}


// ######################
// ### get total hits ###
// ######################
	
	$query = "SELECT SUM(count)  AS totalhits FROM hits"; 
	 
	$result = mysql_query($query) or die(mysql_error());

	
	while($row = mysql_fetch_array($result))
	{
		$totalhits = $row['totalhits']  ;
	}

// ####################
// ### Display hits ###
// ####################

	echo '<h3>Hits</h3>' ;

	$result = mysql_query("SELECT * FROM " . $dbtablehits . " ORDER BY count DESC");
	
	echo '<div class="table-responsive">
	       <table class="table"> 
	       <caption></caption> 
	       <thead> 
		       <tr> 
		       <th>Page</th> 
		       <th>Hits</th>
		       </tr>
	        </thead>' ;

	// keeps getting the next row until there are no more to get
	while($row = mysql_fetch_array( $result )) 
	{
	// Print out the contents of each row into a table
		echo
		"<tbody> 
	          <tr>  
              <td>{$row['page']}</td>
              <td>{$row['count']}</td>
	         </tr>" ; 	
	} 
	echo "<tr>
	         <td> <strong> Total Hits </strong> </td>
	         <td> <strong> $totalhits </strong> </td>
	         </tr>
	         </tbody>";
	echo "</table></div><br /> ";

// ############################
// ### get total unique IPs ###
// ############################

$result=mysql_query("SELECT MAX(id) FROM info");
while ($row = mysql_fetch_array($result, MYSQL_NUM)) 
{
$totalips = $row[0] ;  
}


// ########################
// ### Display visitors ###
// ########################

echo '<h3> Visitors </h3>' ;

$result = mysql_query("SELECT * FROM $dbtableinfo ORDER BY id DESC") 
or die(mysql_error());  
echo '<div class="table-responsive">
	       <table class="table"> 
	       <caption></caption> 
	       <thead> 
		       <tr> 
		       <th>IP</th> 
		       <th>User agent</th>
		       <th>Date & Time</th>
		       </tr>
	        </thead>';

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) 
{
	// Print out the contents of each row into a table
	echo
		"<tbody> 
	          <tr>  
              <td>{$row['ip_address']}</td>
              <td>{$row['user_agent']}</td>
              <td>{$row['datetime']}</td>
	         </tr>" ; 		
} 
    echo "<tr>
	         <td> <strong> Total unique IP´s </strong> </td>
	         <td> <strong> $totalips </strong> </td>
	         <td>  </td>
	         </tr>
	         </tbody>";
	echo "</table></div><br /> ";
	
?>
</div>
<!-- dashboard sidemenu -->
		<div id="dashboard_sidemenu">
		   <nav class="nav-sidebar">
		   	<ul class="nav tabs">
		   		<li><a href="../public/admin.php" class="active">Users</a></li>
		   		<li><a href="../public/editor.php">Edit posts</a></li>
		   		<li><a href="../public/media.php">Media</a></li>
		   		<li><a href="../public/post.php">Post</a></li>
		   		<li><a href="../hitcounter/view.php">Page views</a></li>
		   	</ul>
		   </nav>
		</div>
		</div>
<script src="js/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

