<?php 
echo file_get_contents('http://' . $cfg['dreambox']['ip'] . ':' . $cfg['dreambox']['port'] . '/web/powerstate?newstate=4');
header( 'Location: ../../dbox.php' ) ;
