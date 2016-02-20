<?php
/**
 * hacked by websafe ;-)
 */

ini_set('display_errors', 'On');
error_reporting(E_ALL);

$file = urldecode($_GET['file']);

echo shell_exec('sudo killall mplayer');
echo shell_exec('sudo killall mpc');

echo '<pre>';

$cmd = "sudo /usr/bin/mplayer \"$file\" > /dev/null 2>/dev/null &";

echo htmlspecialchars($cmd);

echo shell_exec ($cmd);

echo '</pre>';

header( "Refresh:1; url=mp3.php", true, 303);


//</dev/null >/dev/null 2>&1 &
