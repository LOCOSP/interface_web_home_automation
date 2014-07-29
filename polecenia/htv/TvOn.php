<?php 
shell_exec('irsend SEND_ONCE PanasonicTV TVPOWERON --count=10');
header( 'Location: ../../tv.php' ) ;
?>
