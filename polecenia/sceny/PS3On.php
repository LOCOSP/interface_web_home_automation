<?php
shell_exec('curl -s -LN --globoff "http://localhost:8083/ZWaveAPI/Run/devices[4].instances[1].SwitchBinary.Set(255)"');
header( 'Location: ../../index.php' ) ;
?>
