<?php
shell_exec('curl localhost:8083/ZAutomation/api/v1/devices/ZWayVDev_zway_4-1-37/command/on -b /var/www/html/interface/data/cookie.txt');
header( 'Location: ../../index.php' ) ;
?>
