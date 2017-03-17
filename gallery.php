<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Mobile Phones</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="gallery-files/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="gallery-files/css/styles.css" rel="stylesheet">
	</head>
	<body>
	<a href="logout.php"><button class="btn btn-default" >Logout</button></a>
	<b>Welcome : <i><?php echo $login_session; ?></i></b>
<div class="container">
  <div class="row">
    <h1>Slash with Phones</h1>
    <div class="row">
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="iphone 6s" href="buying.php"><img class="thumbnail img-responsive" src="project-images/mobile section/apple6s.jpg"></a>
	  <p class="text-center">iphone 6s </p></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Samsung edge" href="#"><img class="thumbnail img-responsive" src="project-images/mobile section/samsunge.png"></a>
	  <p class="text-center">Samsung edge </p></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Zenfone 2" href="#"><img class="thumbnail img-responsive" src="project-images/mobile section/zenfone2.jpeg"></a>
	  <p class="text-center">Zenfone 2 </p></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Xiaomi note pro" href="#"><img class="thumbnail img-responsive" src="project-images/mobile section/xiaomiminotepro.jpeg"></a>
	  <p class="text-center">Xiaomi note pro </p></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Lumia 535" href="#"><img class="thumbnail img-responsive" src="project-images/mobile section/lumia535.jpeg"></a>
	  <p class="text-center">Lumia 535 </p></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Lenovo a6000 plus" href="#"><img class="thumbnail img-responsive" src="project-images/mobile section/xoloa6000plus.jpg"></a>
	  <p class="text-center">Lenovo a6000 plus </p></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Xperia Z3" href="#"><img class="thumbnail img-responsive" src="project-images/mobile section/xperiaz3.jpg"></a>
	  <p class="text-center">Xperia Z3 </p></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Xolo omega 5" href="#"><img class="thumbnail img-responsive" src="project-images/mobile section/xoloomega.jpg"></a>
	  <p class="text-center">Xolo omega 5 </p></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Smart Watch" href="#"><img class="thumbnail img-responsive" src="project-images/mobile section/its-time.jpg"></a>
	  <p class="text-center">Smart Watch </p></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Apple iwatch" href="#"><img class="thumbnail img-responsive" src="project-images/mobile section/iwatch.jpg"></a>
	  <p class="text-center">Apple iwatch</p></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Samsung smart watch" href="#"><img class="thumbnail img-responsive" src="project-images/mobile section/samsunsw.png"></a>
	  <p class="text-center">Samsung smart watch </p></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sony smart watch" href="#"><img class="thumbnail img-responsive" src="project-images/mobile section/sonysw.jpg"></a>
	  <p class="text-center">Sony Smart watch </p></div>
    </div>
    <hr>
    <a href="http://bootply.com/71401">Edit on Bootply</a>
    <hr>
  </div>
</div>
<div class="modal" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
	<div class="modal-header">
		<button class="close" type="button" data-dismiss="modal">×</button>
		<h3 class="modal-title"></h3>
	</div>
	<div class="modal-body">
		<div id="modalCarousel" class="carousel">
 
          <div class="carousel-inner">
           
          </div>
          
          <a class="carousel-control left" href="#modalCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          
        </div>
	</div>
	<div class="modal-footer">
		<a href="buying.php"><button class="btn btn-default" >Buy Now/#Slash_it</button></a>
	</div>
   </div>
  </div>
</div>



	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="gallery-files/js/bootstrap.min.js"></script>
		<script src="gallery-files/js/scripts.js"></script>
	</body>
</html>