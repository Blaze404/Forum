<?php

$mysql_server = 'localhost';
$mysql_user = 'root';
$mysql_password = '';
$mysql_database = 'forum';

$GLOBALS['con'] = mysqli_connect($mysql_server, $mysql_user, $mysql_password, $mysql_database);

if(!$con){
    die('Error');
}
?>