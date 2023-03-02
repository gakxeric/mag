<?php
  require("../includes/db_conection.php");
    $db=mysql_select_db("mag1",$dbconection);
    error_reporting(0);
    if(isset($_POST['login'])){
    	$user=$_POST['username'];
    $password=$_POST['password'];
    
    		$result=mysql_query("SELECT* FROM admin WHERE username='$user' AND password='$password'");
    		$row = mysql_fetch_array( $result,MYSQL_ASSOC ); 
    		$role= $row['role'];
    		switch ($role) {
    			
    				case 'Administrator':
    				session_start();
    				$_SESSION['username'] =$user;
    				header( "Location: ../public/admin.php" );
    				break;
    				case 'Editor':
    				header( "Location: editor_menu.php" );
    				break;
    				case 'Writer':
    				header( "Location: writer_menu.php" );
    				break;
    			
    			default:

    				echo '<script type="text/javascript">
    				function go(){
					document.getElementById("form").action="../public/dashboard_login.php";
					};
					  document.getElementById("wrong").style.color="red";
					  document.getElementById("wrong").innerHTML="SORRY Please check your username or password!";
					</script>';
    		}
    	
    }

?>