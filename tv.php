<?php include_once 'header.php'; ?>
<body >
<?php include_once 'navbar.php'; ?>
<div class="container">
   <h2>TELEWIZOR</h2>
       <div class="left">
	<p>
	    <button onClick="parent.location='polecenia/tv/TvOn.php'" class="btn btn-large btn-block" type="button">ON</button>
	</p>
	<p>
	    <button onClick="parent.location='polecenia/tv/TvVolUp.php'" class="btn btn-large btn-block" type="button">Volume Up</button>
	</p>
    </div>
    <div class="right">
        <p>
            <button onClick="parent.location='polecenia/tv/TvOff.php'" class="btn btn-large btn-block" type="button">OFF</button>
        </p>
        <p>
            <button onClick="parent.location='polecenia/tv/TvVolDn.php'" class="btn btn-large btn-block" type="button">Volume Down</button>
        </p>
    </div>
    <hr class="clear">
    <div class="btn-toolbar center-text">
        <div class="btn-group">
            <button onClick="parent.location='polecenia/tv/PC.php'" class="btn-large btn">PC</button>
            <button onClick="parent.location='polecenia/tv/TV.php'"  class="btn-large btn">TV</button>
           <button onClick="parent.location='polecenia/tv/Cast.php'" class="btn-large btn">CAST</button>
	    <button onClick="parent.location='polecenia/tv/PS3.php'" class="btn-large btn">PS3</button>
            <button onClick="parent.location='polecenia/tv/DVD.php'" class="btn-large btn">DVD</button>
        </div>
    </div>
    <br />
    <p>
	<button onClick="parent.location='polecenia/tv/TvMute.php'" class="btn btn-large btn-block" type="button">MUTE</button>
    </p>
    <br />
</div>
<?php include_once 'javascript.php'; ?>
</body>
</html>
