<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" type="image/png" href="/packages/assets/media/images/landing/logo.png">
  	<link rel="stylesheet" href="/packages/libs/mdb/css/bootstrap.min.css">
  	<link rel="stylesheet" href="/packages/libs/mdb/css/mdb.min.css">
  	<link rel="stylesheet" href="/packages/libs/font-awesome-4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="/packages/assets/css/child/main.css?{{rand();}}">

	<title>Elige tú Avatar</title>

	<!--Navbar-->
	<nav class="navbar navbar-fixed-top navbar-dark rfc-navbar">

		<div class="container">

			<a class="navbar-brand">
				<img src="/packages/assets/media/images/system/icon.png" class="img-fluid reg-logo" id="reg-imgLogo">
				Curiosity Educación
			</a>

		</div>

	</nav>
	<!--/.Navbar-->
</head>
<body>

<div class="container-fluid">
    <div class="">
       <div class="col-md-8">

			<!-- Contentainer -->
			<div class="col-md-12 z-depth-1" id="sela-container">
				<h3 class="h3-responsive text-xs-center">¡ Elige el Avatar que más te guste ! &nbsp;<i class="fa fa-hand-pointer-o" style="color:red;"></i></h3>
				<hr>
				<div class="row">
					<a href="#">
						<div class="col-md-6">
							<h5 class="text-xs-center title-avatar h5-responsive text-white">¡Hola soy TOT!</h5>
							<div id="sela-divTot" class="sal-divAvatar">

							</div>
						</div>
					</a>
					<a href="#">
						<div class="col-md-6">
							<h5 class="text-xs-center title-avatar h5-responsive text-white">¡Hola soy SIA!</h5>
							<div id="sela-divSia" class="sal-divAvatar">

							</div>
						</div>
					</a>
				</div>
			</div>
       </div>
  		<div class="col-md-4 z-depth-1" id="sela-style">
       		<div class="container">
				<h4 class="h4-responsive text-xs-center">
					<span id="sela-titleStyle">Estilos de [Avantar]</span> &nbsp;<i class="fa fa-paint-brush" style="color:red;"></i>
				</h4><hr>

      			<div id="sela-styles">

      			</div>
      			<hr>
      			<center><a class="btn btn-avatarsel btn-rounded">Elegir</a></center>
       		</div>
    	</div>
    </div>
</div>

	<script src="/packages/libs/mdb/js/jquery-3.1.1.min.js"></script>
    <script src="/packages/libs/mdb/js/tether.min.js"></script>
    <script src="/packages/libs/mdb/js/bootstrap.min.js"></script>
    <script src="/packages/libs/mdb/js/mdb.min.js"></script>

    <script src="/packages/assets/js/child/models/selectAvatar.js?{{rand();}}" charset="utf-8"></script>
   <script src="/packages/assets/js/child/controllers/selectAvatarCtrl.js?{{rand();}}" charset="utf-8"></script>
   <script src="/packages/assets/js/child/dispatchers/dsp-selectAvatar.js?{{rand();}}" charset="utf-8"></script>
</body>
</html>
