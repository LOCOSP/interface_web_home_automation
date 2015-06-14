<?php require 'includes/header.php'; ?>

<?php require 'includes/head-dream-conf.php'; ?>

<body >
<?php require 'includes/navbar.php'; ?>
<div class="container">
   <h2>DREAMBOX</h2>
    <div class="left">
	<p>
	    <button onClick="parent.location='polecenia/dbox/DreamboxON.php'" class="btn btn-large btn-block" type="button">ON</button>
	</p>
	<p>
	    <button onClick="parent.channel.location='http://<?php echo $cfg['dreambox']['ip'];?>:<?php echo $cfg['dreambox']['port'];?>/web/vol?set=up'" class="btn btn-large btn-block" type="button">Vol UP</button>
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
                    <?php
                        if ($name == 'N/A')
                        {
                            echo '';
                        }
                        else
                        {
                            echo ("Obecnie grane:");
                            echo ("<h5>");
                            echo  $tytul;
                            echo  ("</h5>");
                            echo ("<p class=\"little\">");
                            echo $opis;
                            echo ("</p>");
                        }
                    ?>
    </div>
    <div class="right">
        <p>
            <button onClick="parent.location='polecenia/dbox/DreamboxOFF.php'" class="btn btn-large btn-block" type="button">OFF</button>
        </p>
	<p>
            <button onClick="parent.channel.location='http://<?php echo $cfg['dreambox']['ip'];?>:<?php echo $cfg['dreambox']['port'];?>/web/vol?set=down'" class="btn btn-large btn-block" type="button">Vol Down</button>
        </p>
        Stan głośności: <b><?php echo $state; ?>%</b>
    </div>
          <iframe id="channel" name="channel" src="http://<?php echo $cfg['dreambox']['ip'];?>:<?php echo $cfg['dreambox']['port'];?>/web/powerstate" ></iframe>
</div>
<?php require 'includes/footer.php'; ?>
</body>
</html>