<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Your cart</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="buying/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="buying/css/styles.css" rel="stylesheet">
	</head>
	<body>
	<b>Welcome : <i><?php echo $login_session; ?></i></b>
<nav class="navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <!--<a href="/" class="navbar-brand">Bootply</a>-->
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="logout.php">Logout</a>
        </li>
        <li>
          <!--<a href="#sec">Edit</a>-->
        </li>
        <li>
          <!--<a href="#sec">Visualize</a>-->
        </li>
        <li>
          <!--<a href="#sec">Prototype</a>-->
        </li>
      </ul>
    </nav>
  </div>
</nav>

<div id="masthead">  
  <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>Your Cart
            <p class="lead">Slash it and buy it</p>
          </h1>
        </div>       <div class="col-md-5">
            <div class="well well-lg"> 
              <div class="row">
                <div class="col-sm-6">
        	      	<img src="project-images/mobile section/apple6s180x100.jpg" class="img-responsive">
                </div>
                <div class="col-sm-6">
	              	<h3>iphone 6s added to your cart at price</h3>
					<?php 
require('login.php');

	//perform verification
	
	//$name_item = $_POST['item_name'];
	//$price_item = $_POST['item_price'];
	//$discount_item = $_POST['discount'];
	$result = mysql_query("select * from item_list where item_name = 'iphone6s'");
	while ($row = mysql_fetch_object($result)) {
    $price = $row->item_price;
    $disc =  $row->discount;
	//echo $disc;
	//echo $price;
	$got_at_this = ($disc/100)*$price;
	$final_price = $price - $got_at_this;
	echo $final_price;
	
	}
	mysql_free_result($result);
		
		//$query = mysql_query("SELECT * FROM item_list WHERE item_name = 'iphone6s'");
		
		
	

?>
<p>thankyou for shopping</p>
</h3>
                </div>
              </div>
            </div>
        </div>
      </div> 
  </div> <!--/container-->
</div><!--/masthead-->

<!--main-->
 <div class="container">
	<div class="row">
      <!--left-->
      <!--<div class="col-md-3" id="leftCol">
        <ul class="nav nav-stacked" id="sidebar">
          <li><a href="#sec0">Section 0</a></li>
          <li><a href="#sec1">Section 1</a></li>
          <li><a href="#sec2">Section 2</a></li>
          <li><a href="#sec3">Section 3</a></li>
          <li><a href="#sec4">Section 4</a></li>
        </ul>
      </div>--><!--/left-->
      
      <!--right-->
      <div class="col-md-9">
        <h2 id="sec0">iphone 6s price = Rs. 60,000</h2>
        <p>
          Apple's iPhone 6 and 6 Plus, released in September, have only been available for a few months, but rumors about the next-generation iPhone are already trickling in. It's likely Apple will continue its 2014 trend, offering the 2015 iPhone in two separate sizes -- one larger and one smaller.

It's not clear what Apple will call its 2015 iPhones, but Apple may stick to its long running "S" naming scheme (which has been around since 2009), calling the new phones the iPhone 6s and the iPhone 6s Plus. iPhone 6s Plus is a mouthful though, so it is possible that this might be the year that we get a new naming format. One analyst believes Apple might call its next-generation phone the "iPhone 7" due to the significance of the new changes being implemented, but it's far too early in development to know for sure.

We don't have many details on the next-generation iPhone yet, but because it's an "S" year and because the iPhone was just redesigned, it's likely the update will focus on internal improvements rather than a new external look. There may be at a couple external change, though. There's been a rumor that Apple could add a new color option to its iPhone lineup in 2015 -- pink. We've also seen a rumor suggesting Apple might opt to use the same 7000 series aluminum used in the Apple Watch in the next-generation iPhone. The aluminum is 60% stronger than standard aluminum but still lightweight.</p>
        
        <hr>
		<h1>Specifications</h1>
        <p>
          NETWORK	Technology	
GSM / CDMA / HSPA / EVDO / LTE<br>
LAUNCH	Announced	2014, September<br>
Status	Available. Released 2014, September<br>
BODY	Dimensions	158.1 x 77.8 x 7.1 mm (6.22 x 3.06 x 0.28 in)<br>
Weight	172 g (6.07 oz)<br>
SIM	Nano-SIM<br>
 	- Fingerprint sensor (Touch ID)<br>
- Apple Pay (Visa, MasterCard, AMEX certified)<br>
DISPLAY	Type	LED-backlit IPS LCD, capacitive touchscreen, 16M colors<br>
Size	5.5 inches (~67.8% screen-to-body ratio)<br>
Resolution	1080 x 1920 pixels (~401 ppi pixel density)<br>
Multitouch	Yes<br>
Protection	Ion-strengthened glass, oleophobic coating<br>
 	- Display Zoom<br>
PLATFORM	OS	iOS 8, upgradable to iOS 8.3<br>
Chipset	Apple A8<br>
CPU	Dual-core 1.4 GHz Cyclone (ARM v8-based)<br>
GPU	PowerVR GX6450 (quad-core graphics)<br>
MEMORY	Card slot	No<br>
Internal	16/64/128 GB, 1 GB RAM<br>
CAMERA	Primary	8 MP, 3264 x 2448 pixels, optical image stabilization, phase detection autofocus, dual-LED (dual tone) flash, check quality<br>
Features	1/3'' sensor size, 1.5µm pixel size, geo-tagging, simultaneous HD video and image recording, touch focus, face/smile detection, HDR (photo/panorama)<br>
Video	1080p@60fps, 720p@240fps, optical stabilization, check quality<br>
Secondary	1.2 MP, 720p@30fps, face detection, HDR, FaceTime over Wi-Fi or Cellular<br>
SOUND	Alert types	Vibration, proprietary ringtones<br>
Loudspeaker	Yes<br>
3.5mm jack	Yes<br>
COMMS	WLAN	Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot<br>
Bluetooth	v4.0, A2DP, LE<br>
GPS	Yes, with A-GPS, GLONASS<br>
NFC	Yes (Apple Pay only)<br>
Radio	No<br>
USB	v2.0, reversible connector<br>
FEATURES	Sensors	Accelerometer, gyro, proximity, compass, barometer<br>
Messaging	iMessage, SMS (threaded view), MMS, Email, Push Email<br>
Browser	HTML5 (Safari)<br>
Java	No<br>
 	- Active noise cancellation with dedicated mic<br>
- Siri natural language commands and dictation<br>
- iCloud cloud service<br>
- iCloud Keychain<br>
- TV-out<br>
- Maps<br>
- iBooks PDF reader<br>
- Audio/video player/editor<br>
- Organizer<br>
- Document viewer/editor<br>
- Photo viewer/editor<br>
- Voice memo/dial/command<br>
- Predictive text input<br>
BATTERY	 	Non-removable Li-Po 2915 mAh battery (11.1 Wh)<br>
Stand-by	Up to 384 h (3G)<br>
Talk time	Up to 24 h (3G)<br>
Music play	Up to 80 h<br>
MISC	Colors	Space Gray, Silver, Gold<br>
SAR US	1.19 W/kg (head)     1.19 W/kg (body)  <br>  
SAR EU	0.99 W/kg (head)     0.91 W/kg (body)   <br> 
Price group	About 600 EUR<br>
TESTS	Performance	Basemark OS II: 1222<br>v
Display	Contrast ratio: 1361 (nominal), 3.023 (sunlight)<br>
Camera	Photo / Video<br>
Loudspeaker	Voice 67dB / Noise 65dB / Ring 66dB<br>
Audio quality	Noise -94dB / Crosstalk -72dB<br>
Battery life	<br>
Endurance rating 79h<br>
</p>
        
        

        </div><!--/right-->
  	</div><!--/row-->
</div><!--/container-->



	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="buying/js/bootstrap.min.js"></script>
		<script src="buying/js/scripts.js"></script>
	</body>
</html>