<?php
    
/*require 'connect.forum.php';*/
require 'core.forum.inc.php';


if(loggedin()){
    header('Location: loginsuccess.php');
}else{
    include 'profile.php';
}

function getcon(){
    echo $mysql_database;
    return $con;
}

?>