<?php
$kanaly = new DOMDocument();
$kanaly->load(
  'http://'
  . $cfg['dreambox']['ip']
  . ':'
  . $cfg['dreambox']['port']
  . '/web/subservices'
);
$nazwy = $kanaly->getElementsByTagName("e2service");
$epgs = $kanaly->getElementsByTagName("e2service");

foreach( $nazwy as $nazwa ) {        
    $name  = $nazwa->getElementsByTagName("e2servicename")->item(0)->nodeValue;
}
foreach( $epgs as $epg ) {        
    $program  = $epg->getElementsByTagName("e2servicereference")->item(0)->nodeValue;
}

$volume = new DOMDocument();
$volume->load(
  'http://'
  . $cfg['dreambox']['ip']
  . ':'
  . $cfg['dreambox']['port']
  . '/web/vol?set=state'
);

$volumestates = $volume->getElementsByTagName("e2volume");

foreach( $volumestates as $volumestate ) {        
    $state  = $volumestate->getElementsByTagName("e2current")->item(0)->nodeValue;
}

$coleci =new DOMDocument();
$coleci->load(
  'http://'
  . $cfg['dreambox']['ip']
  . ':'
  . $cfg['dreambox']['port']
  .'/web/epgservice?sRef='.$program.''
        );

$teraz_tytuly = $coleci->getElementsByTagName("e2event");
$teraz_opisy = $coleci->getElementsByTagName("e2event");

foreach( $teraz_tytuly as $teraz_tytul ) {  
    $tytul  = $teraz_tytul->getElementsByTagName("e2eventtitle")->item(0)->nodeValue;
    break;
}

foreach( $teraz_opisy as $teraz_opis ) {  
    $opis  = $teraz_opis->getElementsByTagName("e2eventdescriptionextended")->item(0)->nodeValue;
    break;
}