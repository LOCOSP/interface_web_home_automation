
<?php
ini_set( 'display_errors', 'On' ); 
error_reporting( E_ALL );
?>

<?php
$output = shell_exec("sudo /usr/bin/mplayer /mnt/muzyka/CD1/01.\ Here\ In\ My\ Heart.mp3");
echo  "<pre>$output</pre>";
?>
