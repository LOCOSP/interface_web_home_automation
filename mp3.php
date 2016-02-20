
<?php include_once 'header.php'; ?>
<body>
<?php include_once 'navbar.php'; ?>
<div class="container">
   <h2>MUZYKA </h2>
    <?php
        $objDOM = new DOMDocument();
            //pobieramy kanal rss i tworzymy liste zawierajaca elementy ITEM
        $objDOM->load("http://192.168.1.10:90/interface/indeksuj-muzyke.php"); 
        //$objDOM->load("http://localhost:8888/test/index.php"); // Seba 09.04
        $service = $objDOM->getElementsByTagName("track");

        $temp_foldername = array("foldername"=>"empty"); // Seba 09.04
        foreach($service as $element)
        {
            $name = $element->getElementsByTagName("title")->item(0)->nodeValue;
            $path = $element->getElementsByTagName("path")->item(0)->nodeValue;
            $folder = $element->getElementsByTagName("folder")->item(0)->nodeValue;
            $withoutExt = preg_replace("/\\.[^.\\s]{3,4}$/", "", $name);
            // Seba 09.04 ---- Anfang
            if($temp_foldername["foldername"] != $folder)
                {
                    $temp_foldername["foldername"] = $folder;
                    echo '<h2 style="background-color:#E0E0E0;">Album: '. str_replace('/mnt/muzyka/', '', $temp_foldername["foldername"]) .'</h2></hr>';
                }
            // Seba 09.04 ---- Ende

            echo '<ul>';
            echo '<li>';
            echo '<a href="/interface/indexplay.php?file='. urlencode($path . '/' . $name).'">'. str_replace('/mnt/muzyka/', '', $withoutExt) .'</a>';
            echo '</li>';
            echo '</li>';
            echo '</ul>';
        }
    ?>
</div>
<?php include_once 'javascript.php'; ?>
</body>
</html>
