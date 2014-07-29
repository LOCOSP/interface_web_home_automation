<?php
shell_exec('mpc stop');
sleep(3);
shell_exec('irsend send_once amplifier off');
header( 'Location: ../../audio.php' ) ;
?>

