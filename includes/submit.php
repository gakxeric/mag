<?php
    require("../includes/db_conection.php");
    $db=mysql_select_db("mag1",$dbconection);
    error_reporting(0);
    /*
    if(!(adminsessioncheck()))
    header('location:index.php'); */
    if(isset($_POST['submit']))
    {
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $username=$_POST['username'];
        $displayname=$_POST['displayname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $comfirmpassword=$_POST['comfirmpassword'];
        $role=$_POST['role'];
    mysql_query("INSERT INTO admin (
    firstname,
    lastname,
    username,
    displayname,
    email,
    password,
    comfirmpassword,
    role
    ) 
 VALUES (
    '$firstname',
    '$lastname',
    '$username',
    '$displayname',
    '$email',
    '$password',
    '$comfirmpassword',
    '$role'
    )") or
die(mysql_error());
    echo '<script type="text/javascript">
window.onload = function(){
  document.getElementById("message").style.color="green";
  document.getElementById("message").innerHTML="new user added";
}</script>';
}

?>