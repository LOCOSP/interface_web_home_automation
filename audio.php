<?php include_once 'header.php'; ?>
<body >
<?php include_once 'navbar.php'; ?>
<div class="container">
   <h2>AMPLITUNER</h2>
      <div class="left">
	<p>
	    <button onClick="parent.location='polecenia/audio/AmpliON.php'" class="btn btn-large btn-block" type="button">ON</button>
	</p>
	<p>
	    <button onClick="parent.location='polecenia/audio/AmpliVolUp.php'" class="btn btn-large btn-block" type="button">Volume Up</button>
	</p>
    </div>
    <div class="right">
        <p>
            <button onClick="parent.location='polecenia/audio/AmpliOFF.php'" class="btn btn-large btn-block" type="button">OFF</button>
        </p>
        <p>
            <button onClick="parent.location='polecenia/audio/AmpliVolDown.php'" class="btn btn-large btn-block" type="button">Volume Down</button>
        </p>
    </div>
    <hr class="clear">
      <!--
    <div class="btn-toolbar center-text">
        <div class="btn-group">
            <button onClick="parent.location='polecenia/audio/PrevTrack.php'" class="btn-large btn"><i class="icon-backward"></i></button>
            <button onClick="parent.location='polecenia/audio/PlayTrack.php'"  class="btn-large btn"><i class="icon-play"></i></button>
            <button onClick="parent.location='polecenia/audio/PauseTrack.php'"  class="btn-large btn"><i class="icon-pause"></i></button>
            <button onClick="parent.location='polecenia/audio/StopTrack.php'" class="btn-large btn"><i class="icon-stop"></i></button>
            <button onClick="parent.location='polecenia/audio/NextTrack.php'" class="btn-large btn"><i class="icon-forward"></i></button>
        </div>
    </div>
    -->
    <br />
        <div class="btn-toolbar center-text">
            <div class="btn-group">
	       <button onClick="parent.location='polecenia/audio/audiotv.php'"  class="btn">TV</button>
               <button onClick="parent.location='polecenia/audio/audioxbmc.php'" class="btn">XBMC</button>
               <button onClick="parent.location='polecenia/audio/audiorpi.php'"  class="btn">RPi</button>
            </div>
        </div>
        <br />
        <div class="btn-toolbar center-text">
            <div class="btn-group">
               <button onClick="parent.location='polecenia/audio/intradioon.php'"  class="btn">RADIO ON</button>
               <button onClick="parent.location='polecenia/audio/intradiooff.php'"  class="btn">RADIO OFF</button>
	    </div>
        </div>
        <br />
	<div class="btn-toolbar center-text">
            <div class="btn-group">
               <button onClick="parent.location='polecenia/radio/hiphop.php'"  class="btn">HIP-HOP</button>
               <button onClick="parent.location='polecenia/radio/jazz.php'"  class="btn">JAZZ</button>
	    </div>
	    <br /><br />
	    <div class="btn-group">
	       <button onClick="parent.location='polecenia/radio/dh.php'"  class="btn">DHALL</button>
	       <button onClick="parent.location='polecenia/radio/reggae.php'"  class="btn">REGGAE</button>
	    </div>
	    <br /><br />
	    <div class="btn-group">
               <button onClick="parent.location='polecenia/radio/dnb.php'"  class="btn">D'n'B</button>
               <button onClick="parent.location='polecenia/radio/dubstep.php'"  class="btn">DUBSTEP</button>
	    </div>
	    <br /><br />
	    <div class="btn-group">
	       <button onClick="parent.location='polecenia/radio/electro.php'"  class="btn">ELECTRO</button>
               <button onClick="parent.location='polecenia/radio/chill.php'"  class="btn">CHILLOUT</button>
	    </div>
        </div>
        <br />

	<!--
    <p>
	<button onClick="parent.location='polecenia/audio/CdEject.php'" class="btn btn-large btn-block" type="button">CD EJECT</button>
    </p>
	-->
    <br />
    <p>
	<button onClick="parent.location='polecenia/audio/AudioMute.php'" class="btn btn-large btn-block" type="button">MUTE</button>
    </p>
    <br />
</div>
<?php include_once 'javascript.php'; ?>
</body>
</html>
