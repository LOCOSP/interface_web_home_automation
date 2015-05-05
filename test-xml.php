<?php $xml = simplexml_load_file("xml/bouqetes.xml");  ?>

   <div class="span10">
                <select id="select" onchange="document.getElementById('channel').src=this.value;">
                    <?php 
                    foreach($xml->e2service as $e2service):
                    ?>
                    <option value="http://192.168.1.128:8088/web/zap?sRef=<?php echo $e2service->e2servicereference; ?>"><?php echo $e2service->e2servicename; ?></option>
                    <?php endforeach; ?>
            </select>
    </div>
    <iframe id="channel" name="channel"></iframe>
