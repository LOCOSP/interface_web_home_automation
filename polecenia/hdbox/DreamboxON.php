<?php 
echo file_get_contents('http://192.168.1.128:80/web/powerstate?newstate=4');
header( 'Location: ../../index.php' ) ;
?>
