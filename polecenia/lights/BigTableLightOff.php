<?php
shell_exec('curl -s -LN --globoff "http://localhost:8083/ZWaveAPI/Run/devices[3].instances[2].SwitchBinary.Set(0)"');
header( 'Location: ../../lights.php' ) ;
?>