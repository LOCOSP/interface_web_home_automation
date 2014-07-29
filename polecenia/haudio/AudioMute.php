<?php
shell_exec('irsend send_once lg_dvd KEY_MUTE');
header( 'Location: ../../audio.php' ) ;
?>