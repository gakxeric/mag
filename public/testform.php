<?php
include '../includes/db_conection.php';
$db=mysql_select_db("mag1",$dbconection);
?>
<!DOCTYPE html>
<html>
<head>
<title>JQuery Form Example</title>
<style>
label.error { width: 250px;
display: inline; color: red;}
</style>
</head>
<body>
<?php
    require("../includes/db_conection.php");
    $db=mysql_select_db("testmag",$dbconection);
    error_reporting(0);
    /*
    if(!(adminsessioncheck()))
    header('location:index.php'); */
    if(isset($_POST['add']))
    {
        $username=$_POST['name'];
        $password=$_POST['username'];
    mysql_query("INSERT INTO admin
VALUES('$name','$username')") or
die(mysql_error());
    echo '<script type="text/javascript">
window.onload = function(){
  alert("New user added");
}</script>';
}

?>
<form action="" method="post">
<table width="330" height="135"
border="0" class="text">
<tr>
<td><label>User Name</label></td>
<td><input type="text"
name="name" id="name"
required></td>
</tr>
<tr>
<td><label>Password</label></td>
<td><input type="text"
id="username" name="username"
required></td>
</tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td><td align="center"><input
type="submit" name="add"
value="Add"></td></tr>
</table>
</form>

</body>
</html>
