<?php
shell_exec('irsend send_once PanasonicTV TVHDMI1');
sleep (2);
shell_exec('irsend send_once amplifier on');
sleep (2);
shell_exec('irsend send_once amplifier tv');
header( 'Location: ../../tv.php' ) ;
?>

