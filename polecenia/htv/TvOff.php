<?php 
shell_exec('irsend SEND_ONCE PanasonicTV TVPOWEROFF');
header( 'Location: ../../index.php' ) ;
?>
