<?php
shell_exec('irsend send_once amplifier on');
sleep (2);
shell_exec('irsend send_once amplifier cd');
header( 'Location: ../../index.php' ) ;
?>

