<?php
    
require 'core.forum.inc.php';
/*

echo $http_referer;
*/
mysqli_close($con);

session_destroy();

header('Location: profile.php');

?>