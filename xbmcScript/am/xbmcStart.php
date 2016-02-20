<?php
shell_exec('irsend send_once amplifier on');
sleep(2);
shell_exec('irsend send_once amplifier vcr');
sleep(3);
shell_exec('irsend send_once PanasonicTV TVPOWERON --count=6');
sleep (3);
shell_exec('irsend send_once PanasonicTV TVHDMI3');