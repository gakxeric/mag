<?php
    require("../includes/db_conection.php");
    $db=mysql_select_db("mag1",$dbconection);
    error_reporting(0);
$result = mysql_query("SELECT * FROM articles ");

?>