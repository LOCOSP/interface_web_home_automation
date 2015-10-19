<?php
shell_exec('irsend SEND_ONCE amplifier on');
sleep(2);
shell_exec('irsend SEND_ONCE amplifier cd');
sleep(1);
shell_exec('mpc play 1');
header( 'Location: ../../audio.php' ) ;
?>
