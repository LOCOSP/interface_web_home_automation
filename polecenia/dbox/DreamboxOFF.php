<?php
echo file_get_contents('http://<?php echo $cfg['dreambox']['ip'];?>:<?php echo $cfg['dreambox']['port'];?>/web/powerstate?newstate=5');
header( 'Location: ../../dbox.php' ) ;
?>
