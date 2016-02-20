<?php
header('Content-type: text/xml');
header('Pragma: public');
header('Cache-control: private');
header('Expires: -1');

// PHP Folder search
// 
// mp3 folder
//
function leseDateien($ordner)
{
  $fileNames = array();
  $handle=opendir($ordner);

  while(($file=readdir($handle))!==false)
  {
    if($file != "." && $file != "..")
    {
      if(preg_match("/\.(mp3|m4a|flac)$/", $file))
      {
        array_push($fileNames, $file);
      }
    }
  }
  closedir($handle);
  return $fileNames;
}
function leseVerzeichnis($ordner)
{
  $folderNames = array();
  $handle=opendir($ordner);

  while(($file=readdir($handle))!==false)
  {
    if($file!=".." AND $file!=".")
    {
      $fullpath=$ordner."/".$file;
      if(is_dir($fullpath))
      {
        $folderNames[] = $fullpath;
        // leseVerzeichnis($fullpath); // Rekursion
      }
    }
  }
  closedir($handle);
  return $folderNames;
}

$folders = leseVerzeichnis("./");
$xml = new SimpleXMLElement('<xml/>');
foreach($folders as $objekt)
{
  $filenames = leseDateien($objekt);
  $folder = explode("/", $objekt);

  for ($i = 0; $i < count($filenames); $i++)
  {
      $track = $xml->addChild('track');
      $track->addChild('path', realpath($objekt));
      $track->addChild('title', "$filenames[$i]");
      $track->addChild('folder', "$objekt");
  }
}
print($xml->asXML());

?>