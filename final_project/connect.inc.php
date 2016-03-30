<?php
// the reason i need this file because i need to connect to my database
// specify host name 
// username and eg.

//connecting to the server correctly 

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db   = 'school_system';

if (!mysql_connect($mysql_host, $mysql_user, $mysql_pass)|| !mysql_select_db($mysql_db)){

die(mysql_error());
// or die('Error message');

}

?>