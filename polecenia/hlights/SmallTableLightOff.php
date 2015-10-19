<?php
shell_exec('curl localhost:8083/ZAutomation/api/v1/devices/ZWayVDev_zway_3-1-37/command/off -b /var/www/html/interface/data/cookie.txt');
header( 'Location: ../../index.php' ) ;
?>
