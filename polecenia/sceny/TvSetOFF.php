<?php
echo file_get_contents('http://192.168.1.128:80/web/powerstate?newstate=5');
sleep(3);
shell_exec('irsend SEND_ONCE PanasonicTV TVPOWEROFF');
header( 'Location: ../../index.php' ) ;
?>
