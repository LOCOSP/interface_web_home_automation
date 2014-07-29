<?php
shell_exec('irsend send_once lg_dvd KEY_VOLUMEUP');
header( 'Location: ../../audio.php' ) ;
?>