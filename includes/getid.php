<?php
$db=mysql_select_db("mag1",$dbconection);
error_reporting(0);
$userId=$_GET['id'];
$result = mysql_query("SELECT * FROM admin WHERE id=$userId");

?>