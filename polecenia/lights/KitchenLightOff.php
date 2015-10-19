<?php
shell_exec('curl localhost:8083/ZAutomation/api/v1/devices/ZWayVDev_zway_7-0-37/command/off -b /var/www/html/interface/data/cookie.txt');
header( 'Location: ../../lights.php' ) ;
?>
