<?php include_once 'header.php'; ?>
<body >
<?php include_once 'navbar.php'; ?>
<div class="container">
   <h2>ŚWIATŁA</h2>
   <p><b>SALON - GALERIA</b></p>
    <div class="left">
	<p>
	    <button onClick="parent.location='polecenia/lights/GalleryLightOn.php'" class="btn btn-large btn-block" type="button">ON</button>
	</p>
    </div>
    <div class="right">
        <p>
            <button onClick="parent.location='polecenia/lights/GalleryLightOff.php'" class="btn btn-large btn-block" type="button">OFF</button>
        </p>
    </div>
    <p><b>SALON - NAROŻNIK</b></p>
    <div class="left">
	<p>
	    <button onClick="parent.location='polecenia/lights/CornnerLightOn.php'" class="btn btn-large btn-block" type="button">ON</button>
	</p>
    </div>
    <div class="right">
        <p>
            <button onClick="parent.location='polecenia/lights/CornnerLightOff.php'" class="btn btn-large btn-block" type="button">OFF</button>
        </p>
    </div>
    <p><b>SALON - STOLIK</b></p>
    <div class="left">
        <p>
            <button onClick="parent.location='polecenia/lights/SmallTableLightOn.php'" class="btn btn-large btn-block" type="button">ON</button>
        </p>
    </div>
    <div class="right">
        <p>
            <button onClick="parent.location='polecenia/lights/SmallTableLightOff.php'" class="btn btn-large btn-block" type="button">OFF</button>
        </p>
    </div>
    <p><b>SALON - STÓŁ</b></p>
    <div class="left">
        <p>
            <button onClick="parent.location='polecenia/lights/BigTableLightOn.php'" class="btn btn-large btn-block" type="button">ON</button>
        </p>
    </div>
    <div class="right">
        <p>
            <button onClick="parent.location='polecenia/lights/BigTableLightOff.php'" class="btn btn-large btn-block" type="button">OFF</button>
        </p>
    </div>
        <p><b>SYPIALNIA - LAMPAKA NOCNA</b></p>
    <div class="left">
        <p>
            <button onClick="parent.location='polecenia/lights/BedroomNightLightOn.php'" class="btn btn-large btn-block" type="button">ON</button>
        </p>
    </div>
    <div class="right">
        <p>
            <button onClick="parent.location='polecenia/lights/BedroomNightLightOff.php'" class="btn btn-large btn-block" type="button">OFF</button>
        </p>
    </div>
        <p><b>TIA - LAMPKA BOCZNA</b></p>
    <div class="left">
        <p>
            <button onClick="parent.location='polecenia/lights/KidsRoomLightOn.php'" class="btn btn-large btn-block" type="button">ON</button>
        </p>
    </div>
    <div class="right">
        <p>
            <button onClick="parent.location='polecenia/lights/KidsRoomLightOff.php'" class="btn btn-large btn-block" type="button">OFF</button>
        </p>
    </div>
</div>
<?php include_once 'javascript.php'; ?>
</body>
</html>
