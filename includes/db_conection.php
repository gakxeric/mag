<?php 
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="mag1";
$dbconection=mysql_connect($dbhost,$dbuser,$dbpass,$dbname);
if (mysql_error()) {
	echo "no connection";
}
 ?>