<?php
shell_exec('sudo /var/www/html/interface/cron/zwave-api-login.sh');
header( 'Location: ../index.php' ) ;
?>
