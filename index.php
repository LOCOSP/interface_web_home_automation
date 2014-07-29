<?php require_once 'header.php'; ?>
<body >
<?php require_once 'navbar.php'; ?>

<?php require_once 'head-dream-conf.php'; ?>

        <div class="container">
            <div class="left">
                <p>
                    <button onClick="parent.location='polecenia/sceny/WatchTV.php'" class="btn btn-large btn-block" type="button">TV SET ON</button>
                </p>
                Obecny kanał: <h5>
                    <?php
                        if ($name == 'N/A')
                        {
                            echo 'Tuner Wyłączony';
                        }
                        else
                        {
                            echo $name;
                        }
                    ?>
                    </h5>
                    <br />
            <!-- światła -->
                <p style="font-size: 10px;">SALON - GALERIA</p>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <button onClick="parent.location='polecenia/hlights/GalleryLightOn.php'" class="btn" type="button">ON</button>
                        <button onClick="parent.location='polecenia/hlights/GalleryLightOff.php'" class="btn" type="button">OFF</button>
                    </div>
                </div>
                <p style="font-size: 10px;">SALON - NAROŻNIK</p>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <button onClick="parent.location='polecenia/hlights/CornnerLightOn.php'" class="btn" type="button">ON</button>
                        <button onClick="parent.location='polecenia/hlights/CornnerLightOff.php'" class="btn" type="button">OFF</button>
                    </div>
                </div>
                <p style="font-size: 10px;">SALON - STOLIK</p>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <button onClick="parent.location='polecenia/hlights/SmallTableLightOn.php'" class="btn" type="button">ON</button>
                        <button onClick="parent.location='polecenia/hlights/SmallTableLightOff.php'" class="btn" type="button">OFF</button>
                    </div>
                </div>
                <p style="font-size: 10px;">SALON - STÓŁ</p>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <button onClick="parent.location='polecenia/hlights/BigTableLightOn.php'" class="btn" type="button">ON</button>
                        <button onClick="parent.location='polecenia/hlights/BigTableLightOff.php'" class="btn" type="button">OFF</button>
                    </div>
		</div>
		<p style="font-size: 10px;">SYPIALNIA - LAMPKA NOCNA</p>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <button onClick="parent.location='polecenia/hlights/BedroomNightLightOn.php'" class="btn" type="button">ON</button>
                        <button onClick="parent.location='polecenia/hlights/BedroomNightLightOff.php'" class="btn" type="button">OFF</button>
                    </div>
		</div>
		<p style="font-size: 10px;">TIA - LAMPKA BOCZNA</p>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <button onClick="parent.location='polecenia/hlights/KidsRoomLightOn.php'" class="btn" type="button">ON</button>
                        <button onClick="parent.location='polecenia/hlights/KidsRoomLightOff.php'" class="btn" type="button">OFF</button>
                    </div>
		</div>
		<p style="font-size: 10px;">SALON - OKNO</p>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <button onClick="parent.location='polecenia/hlights/WindowLightOn.php'" class="btn" type="button">ON</button>
                        <button onClick="parent.location='polecenia/hlights/WindowLightOff.php'" class="btn" type="button">OFF</button>
                    </div>
		</div>
            <!--^^ koniec świateł ^^-->
            
        
            </div>
            <div class="right">
                <p>
                    <button onClick="parent.location='polecenia/sceny/TvSetOFF.php'" class="btn btn-large btn-block" type="button">TV SET OFF</button>
                </p>
                
                 Stan głośności: <b><?php echo $state; ?>%</b>
                <br /><br /><br /><br />
                <!-- tv ampli dream -->
                <div style="text-align: right;">
            
                <p style="font-size: 10px;">TV</p>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <button onClick="parent.location='polecenia/htv/TvOn.php'" class="btn" type="button">ON</button>
                        <button onClick="parent.location='polecenia/htv/TvOff.php'" class="btn" type="button">OFF</button>
                    </div>
                </div>
                <p style="font-size: 10px;">AMPLITUNER</p>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <button onClick="parent.location='polecenia/haudio/AmpliON.php'" class="btn" type="button">ON</button>
                        <button onClick="parent.location='polecenia/haudio/AmpliOFF.php'" class="btn" type="button">OFF</button>
                    </div>
                </div>
                <p style="font-size: 10px;">DREAMBOX</p>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <button onClick="parent.location='polecenia/hdbox/DreamboxON.php'" class="btn" type="button">ON</button>
                        <button onClick="parent.location='polecenia/hdbox/DreamboxOFF.php'" class="btn" type="button">OFF</button>
                    </div>
                </div>
		<p style="font-size: 10px;">XBMC - POWER</p>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <button onClick="parent.location='polecenia/htv/xbmcOn.php'" class="btn" type="button">ON</button>
                        <button onClick="parent.location='polecenia/htv/xbmcOff.php'" class="btn" type="button">OFF</button>
                    </div>                
                </div>
		<p style="font-size: 10px;">RADIO</p>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <button onClick="parent.location='polecenia/haudio/intradioon.php'" class="btn" type="button">ON</button>
                        <button onClick="parent.location='polecenia/haudio/intradiooff.php'" class="btn" type="button">OFF</button>
                    </div>                
                </div>
		<p style="font-size: 10px;">KABEL - PC</p>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <button onClick="parent.location='polecenia/sceny/PCOn.php'" class="btn" type="button">ON</button>
                        <button onClick="parent.location='polecenia/sceny/PCOff.php'" class="btn" type="button">OFF</button>
                    </div>                
                </div>
		<p style="font-size: 10px;">KABEL - PS3</p>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <button onClick="parent.location='polecenia/sceny/PS3On.php'" class="btn" type="button">ON</button>
                        <button onClick="parent.location='polecenia/sceny/PS3Off.php'" class="btn" type="button">OFF</button>
                    </div>                
                </div>
                 <!--^^tv ampli dream^^-->
                  <iframe id="channel" name="channel" src="http://locosp.dyndns.org:80/web/powerstate" ></iframe>
            </div>
            
        </div>
        
            <div class="btn-toolbar center-text">
                
                <div class="btn-group">
                    <button onClick="parent.channel.location='http://<?php echo $cfg['dreambox']['ip'];?>:<?php echo $cfg['dreambox']['port'];?>/web/zap?sRef=1:0:1:10D7:3E8:13E:820000:0:0:0:'" class="btn">
                            <img src="img/programy/tvn.jpg" class="img-rounded" /></button>
                        <button onClick="parent.channel.location='http://<?php echo $cfg['dreambox']['ip'];?>:<?php echo $cfg['dreambox']['port'];?>/web/zap?sRef=1:0:1:13F4:5DC:13E:820000:0:0:0::FOX'" class="btn">
                            <img src="img/programy/FoxHD.png" class="img-rounded"/></button>
                        <button onClick="parent.channel.location='http://<?php echo $cfg['dreambox']['ip'];?>:<?php echo $cfg['dreambox']['port'];?>/web/zap?sRef=1:0:1:32DC:190:13E:820000:0:0:0:'" class="btn">
                            <img src="img/programy/canalplus_pl.jpg" class="img-rounded"/></button>
			<button onClick="parent.channel.location='http://<?php echo $cfg['dreambox']['ip'];?>:<?php echo $cfg['dreambox']['port'];?>/web/zap?sRef=1:0:1:1139:2AF8:13E:820000:0:0:0:'" class="btn">
                            <img src="img/programy/history-channel.jpg" class="img-rounded"/></button>
			
                </div>
                <br /><br />
                <div class="btn-group">
                        <button onClick="parent.channel.location='http://<?php echo $cfg['dreambox']['ip'];?>:<?php echo $cfg['dreambox']['port'];?>/web/zap?sRef=1:0:1:32E0:190:13E:820000:0:0:0:'" class="btn">
                            <img src="img/programy/mini-mini.gif" class="img-rounded"/></button>
                        <button onClick="parent.channel.location='http://<?php echo $cfg['dreambox']['ip'];?>:<?php echo $cfg['dreambox']['port'];?>/web/zap?sRef=1:0:1:1E:578:13E:82ACCE:0:0:0:'" class="btn">
                            <img src="img/programy/NickJunior.png" class="img-rounded"/></button>
                        <button onClick="parent.channel.location='http://<?php echo $cfg['dreambox']['ip'];?>:<?php echo $cfg['dreambox']['port'];?>/web/zap?sRef=1:0:1:290C:1EDC:71:820000:0:0:0::Jim Jam Polska'" class="btn">
                            <img src="img/programy/jija.gif" class="img-rounded"/></button>
			<button onClick="parent.channel.location='http://<?php echo $cfg['dreambox']['ip'];?>:<?php echo $cfg['dreambox']['port'];?>/web/zap?sRef=1:0:1:12C6:2E7C:13E:820000:0:0:0:'" class="btn">
                            <img src="img/programy/tele-to-on+.jpg" class="img-rounded"/></button>
                </div>
                <br /><br />
                <div class="btn-group">
                         
                </div>
            </div>

<?php include_once 'javascript.php'; ?>

</body>
</html>
