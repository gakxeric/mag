<?php
$db=mysql_select_db("mag1",$dbconection);
error_reporting(0);
$articleId=$_GET['id'];
$result = mysql_query("SELECT * FROM articles WHERE id=$articleId");

?>