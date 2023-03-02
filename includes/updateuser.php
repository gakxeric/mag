<?php
    require("../includes/db_conection.php");
    $db=mysql_select_db("mag1",$dbconection);
    error_reporting(0);
    /*
    if(!(adminsessioncheck()))
    header('location:index.php'); */
    if(isset($_POST['updateuser']))
    {
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $username=$_POST['username'];
        $displayname=$_POST['displayname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $comfirmpassword=$_POST['comfirmpassword'];
        $role=$_POST['role'];
    mysql_query("UPDATE admin SET
    firstname='$firstname',
    lastname='$lastname',
    username='$username',
    displayname='$displayname',
    email='$email',
    password='$password',
    comfirmpassword='$comfirmpassword',
    role='$role'
    WHERE id=$userId
     ") or
die(mysql_error());
    echo '<script type="text/javascript">
window.onload = function(){
 window.location="admin.php";
}</script>';
}
else if(isset($_POST['deleteuser']))
{
     mysql_query("DELETE FROM admin WHERE id=$userId")
     or
die(mysql_error());
    echo '<script type="text/javascript">
window.onload = function(){
 window.location="admin.php";
}</script>';
}
else if(isset($_POST['updatepost']))
    {
        $title=$_POST['title'];
        $status=$_POST['status'];
        $content=$_POST['content'];
        $author=$_POST['author'];
        $category=$_POST['category'];
        $coments=$_POST['coments'];
        $datetime =date("Y/m/d") . ' ' . date('H:i:s') ;
    mysql_query("UPDATE articles SET
        title='$title',
        status='Published',
        content='$content',
        author='$author',
        category='$category',
        datetime='$datetime'
    WHERE id=$articleId
     ") or
die(mysql_error());
    echo '<script type="text/javascript">
window.onload = function(){
 window.location="editor.php";
}</script>';
}
else if(isset($_POST['deletepost']))
{
     mysql_query("DELETE FROM articles WHERE id=$articleId")
     or
die(mysql_error());
    echo '<script type="text/javascript">
window.onload = function(){
 window.location="editor.php";
}</script>';
}
?>