<?php 
function pobierzListePlikowKatalogu($katalog, $rozszerzenia) {
   $katalogBezwglednaSciezka = realpath($katalog);
   $elementyKatalogu = scandir($katalogBezwglednaSciezka);
   $pliki = array();
   foreach($elementyKatalogu as $element)
   {
     $rozszerzeniePliku = pathinfo($element, PATHINFO_EXTENSION);
     // jeśli bieżący element jest plikiem
     if(is_file($element ))
     {
         // jesli $rozszerzenie jest w tablicy $rozszerzenia:
         if(in_array($rozszerzeniePliku, $rozszerzenia))
         {
             // wtedy dodaj go do tablicy pliki
           $pliki[] = $katalogBezwglednaSciezka . '/' . $element;
         }
     }
   }
   return $pliki;
}

function pobierzListePodkatalogow($katalog) {
   $katalogBezwglednaSciezka = realpath($katalog);
   $elementyKatalogu = scandir($katalogBezwglednaSciezka);
   $katalogi = array();
   foreach($elementyKatalogu as $element)
   {
     // jeśli bieżący element jest katalogiem
     if(is_dir($element ))
     {
          // wtedy dodaj go do tablicy pliki
          $katalogi[] = $katalogBezwglednaSciezka . '/' . $element;
     }
   }
   return $katalogi;
}

function wyswietlListeLinkowDoPlikow($pliki) {
   echo '<ul>';
   echo '<li><a href="./../">..</a></li>'; // TO DODAŁEM
   foreach($pliki as $plik)
   {
      echo '<li>';
      echo '<a href="indexplay.php?file='.$plik.'">'. str_replace('/var/www/interface/muzyka/', '', $plik) .'</a>';
      echo '</li>';
   }
   echo '</ul>';
}

function wyswietlListeLinkowDoKatalogow($katalogi) {
 echo '<ul>';
 foreach($katalogi as $katalog)
 {
     $katalogUrl =  $katalog;
     echo '<li>';
     echo '<a href="index.php?katalog='.$katalogUrl.'/">'. str_replace('/var/www/interface/muzyka/', '', $katalogUrl) .'</a>';
     echo '</li>';
 }
 echo '</ul>';
}

