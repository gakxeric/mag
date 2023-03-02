<?php
    require("../includes/db_conection.php");
    $db=mysql_select_db("mag1",$dbconection);
    error_reporting(0);
    /*
    if(!(adminsessioncheck()))
    header('location:index.php'); */
    if(isset($_POST['publish']))
    {
        $title=$_POST['title'];
        $status=$_POST['status'];
        $content=$_POST['content'];
        $author=$_POST['author'];
        $category=$_POST['category'];
        $coments=$_POST['coments'];
        $datetime =date("Y/m/d") . ' ' . date('H:i:s') ;        	
    mysql_query("INSERT INTO articles (
    title,
    status,
    content,
    author,
    category,
    comment,
    datetime
    ) 
 VALUES (
    '$title',
    'Pending',
    '$content',
    '$author',
    '$category',
    '$coments',
    '$datetime'
    )") or
die(mysql_error());
    echo '<script type="text/javascript">
window.onload = function(){
   document.getElementById("article_message").style.color="green";
  document.getElementById("article_message").innerHTML="new article added";
}</script>';
}

?>