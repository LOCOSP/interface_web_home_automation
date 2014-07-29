<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'On');
echo file_get_contents('http://localhost:8090?Cd');
header( 'Location: ../../audio.php' ) ;
?>
