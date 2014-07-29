<?php
echo file_get_contents('http://192.168.1.128:80/web/powerstate?newstate=4');
sleep(3);
shell_exec('irsend SEND_ONCE PanasonicTV TVPOWERON --count=6');
shell_exec('irsend SEND_ONCE PanasonicTV TVPOWERON --count=4');
header( 'Location: ../../index.php' ) ;
?>

