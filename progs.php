<?php $xml = simplexml_load_file("xml/channels.xml");  ?>
<?php require 'includes/header.php'; ?>

<?php require 'includes/head-dream-conf.php'; ?>
<body >
<?php require 'includes/navbar.php'; ?>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
      <?php
$objDOM = new DOMDocument();
    //pobieramy kanal rss i tworzymy liste zawierajaca elementy ITEM
$objDOM->load("http://192.168.1.128:80/web/subservices"); 
$service = $objDOM->getElementsByTagName("e2service");

foreach( $service as $service ) {        
    //w petli wyciagamy wartosci z poszczegolnych znacznikow
    $name  = $service->getElementsByTagName("e2servicename")->item(0)->nodeValue;
}
?>
<h1><?php echo $name; ?></h1>
      <iframe id="channel" name="channel" src="http://192.168.1.128:80/web/subservices" ></iframe>
      <div id="kanaly">
        <ul>
            <button onClick="parent.channel.location='http://192.168.1.128:80/web/zap?sRef=1:0:1:10D7:3E8:13E:820000:0:0:0:'" class="btn btn-large btn-block" type="button" >
              <img src="img/programy/tvn.jpg" class="img-rounded" /></button>
            <button onClick="parent.channel.location='http://192.168.1.128:80/web/zap?sRef=1:0:1:13F4:5DC:13E:820000:0:0:0::FOX'" class="btn btn-large btn-block" type="button" >
              <img src="img/programy/FoxHD.png" class="img-rounded"/></button>
            <button onClick="parent.channel.location='http://192.168.1.128:80/web/zap?sRef=1:0:1:32DC:190:13E:820000:0:0:0:'" class="btn btn-large btn-block" type="button" >
              <img src="img/programy/canalplus_pl.jpg" class="img-rounded"/></button>
            <button onClick="parent.channel.location='http://192.168.1.128:80/web/zap?sRef=1:0:1:3779:44C:13E:820000:0:0:0:'" class="btn btn-large btn-block" type="button" >
              <img src="img/programy/canal-plus-film.jpg" class="img-rounded"/></button>
            <button onClick="parent.channel.location='http://192.168.1.128:80/web/zap?sRef=1:0:1:379A:44C:13E:820000:0:0:0:'" class="btn btn-large btn-block" type="button" >
              <img src="img/programy/mini-mini.gif" class="img-rounded"/></button>
            <button onClick="parent.channel.location='http://192.168.1.128:80/web/zap?sRef=1:0:1:2938:1EDC:71:820000:0:0:0:'" class="btn btn-large btn-block" type="button" >
              <img src="img/programy/disney_Junior.gif" class="img-rounded"/></button>
            <button onClick="parent.channel.location='http://192.168.1.128:80/web/zap?sRef=1:0:1:1E:578:13E:82ACCE:0:0:0:'" class="btn btn-large btn-block" type="button" >
              <img src="img/programy/NickJunior.png" class="img-rounded"/></button>
            <button onClick="parent.channel.location='http://192.168.1.128:80/web/zap?sRef=1:0:1:290C:1EDC:71:820000:0:0:0::Jim Jam Polska'" class="btn btn-large btn-block" type="button" >
              <img src="img/programy/jija.gif" class="img-rounded"/></button>
            <button onClick="parent.channel.location='http://192.168.1.128:80/web/zap?sRef=1:0:1:12C6:2E7C:13E:820000:0:0:0:'" class="btn btn-large btn-block" type="button" >
              <img src="img/programy/tele-to-on+.jpg" class="img-rounded"/></button>
        </ul>
      </div>
    </div>
    <div class="span10">
                <select id="select" onchange="document.getElementById('channel').src=this.value;">
                    <?php 
                    foreach($xml->payload as $payload):
                    ?>
                    <option value="http://192.168.1.128:80/web/zap?sRef=<?php echo $payload->value; ?>"><?php echo $payload->phrase; ?></option>
                    <?php endforeach; ?>
            </select>
    </div>
  </div>
</div>
<?php require 'includes/footer.php'; ?>
</body>
</html>