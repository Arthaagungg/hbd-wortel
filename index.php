<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"><!-- <![endif]-->

<head>
	<title>Happy Birthday</title>
	<meta charset="UTF-8" />
	<meta name="description" content="Happy Birthday Xola">
	<meta name="robots" content="index, follow" />
	<link rel="author" href="https://plus.google.com/u/1/+AyushSharma1/" />
	<meta name="keywords" content="Birthday, Happy">
	<!-- Strat of Facebook Meta -->
	<meta property="og:type" content="E-Greeting" />
	<meta property="og:image" content="favicon.ico" />
	<meta property="og:description" content="Wish you a very Happy Birthday">
	<!-- End of Facebook Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" type="text/css" href="loading.css">
	<link href='http://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>
	<!-- <link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet/less" href="cake.less">
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.1.0/less.min.js"></script>
</head>

<body>
	<div class="loading"></div>
	<audio class="song" controls loop>
		<source src="hbd.mp3">
		</source>
		Your browser isn't invited for super fun audio time.
	</audio>
	<div class="balloons text-center" id="b1">
	</div>
	<div class="balloons text-center" id="b2">
		<h2 style="color:#0719D4;">B</h2>
	</div>
	<div class="balloons text-center" id="b3">
		<h2 style="color:#D14D39;">D</h2>
	</div>
	<div class="balloons text-center" id="b4">
		<h2 style="color:#8FAD00;">X</h2>
	</div>
	<div class="balloons text-center" id="b5">
		<h2 style="color:#8377E4;">O</h2>
	</div>
	<div class="balloons text-center" id="b6">
		<h2 style="color:#99C96A;">L</h2>
	</div>
	<div class="balloons text-center" id="b7">
		<h2 style="color:#20CFB4;">A</h2>
	</div>

	<!-- start modal -->
	<div id="myModal-abdul" class="modal">

		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
				<span class="close-abdul">&times;</span>
				<p>Kepada Yth : <br> Sdri. Winda Devi <br> Yang Sedang Ber ulang tahun <br> di <br> Tempat.</p>
			</div>
			<div class="modal-body">
				<p>wyatb ya win <br>
					semoga apa yang di semogakan segera tersemogakan ya. :)<br>
					maaf cuma ini,<br>
					semoga seneng.
				</p>
			</div>
			<div class="modal-footer">
				<h3>TTD Abdul</h3>
			</div>
		</div>

	</div>
	<!-- end modal -->

	<script>
		// Get the modal
		var modalabdul = document.getElementById("myModal-abdul");
		var btnabdul = document.getElementById("b1");

		// Get the <span> element that closes the modal
		var spanabdul = document.getElementsByClassName("close-abdul")[0];

		// When the user clicks the button, open the modal 
		btnabdul.onclick = function() {
			modalabdul.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		spanabdul.onclick = function() {
			modalabdul.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modalabdul) {
				modalabdul.style.display = "none";
			}
		}
		
document.addEventListener("contextmenu", function(event) {
    event.preventDefault();
    alert("Jangan jail ya gengs");
});
document.addEventListener("keydown", function(event) {
    //jika tombol Ctrl + U ditekan
    if (event.ctrlKey && event.keyCode === 85) {
        //mencegah default action dari event
        event.preventDefault();
        //menampilkan pesan
        alert("Jangan jail ya gengs");
    }
	else if (event.ctrlKey && event.shiftKey && event.keyCode === 73) {
        event.preventDefault();
        alert("Jangan jail ya gengs");
    }
});
	</script>

	<img src="Balloon-Border.png" width="100%" class="balloon-border">


	<div class="container">

		<div class="row">
			<div class="col-md-2 col-xs-2 bulb-holder">
				<div class="bulb" id="bulb_yellow"></div>
			</div>
			<div class="col-md-2 col-xs-2 bulb-holder">
				<div class="bulb" id="bulb_red"></div>
			</div>
			<div class="col-md-2 col-xs-2 bulb-holder">
				<div class="bulb" id="bulb_blue"></div>
			</div>
			<div class="col-md-2 col-xs-2 bulb-holder">
				<div class="bulb" id="bulb_green"></div>
			</div>
			<div class="col-md-2 col-xs-2 bulb-holder">
				<div class="bulb" id="bulb_pink"></div>
			</div>
			<div class="col-md-2 col-xs-2 bulb-holder">
				<div class="bulb" id="bulb_orange"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<img src="banner.png" class="bannar">
			</div>
		</div>

		<div class="navbar navbar-fixed-bottom">

			<div class="row">
				<div class="col-md-6 text-center col-md-offset-3">
					<div class="envelope-wrapper">
						<div class="close" id="envelope">
							<div class="front flap"></div>
							<div class="front pocket"></div>
							<div class="letter">
								<button class="btnp btns" id="turn_on">Open</button>
								<div class="words line1">To : Wortel</div>
								<div class="words line2">Yang Sedang Berulang Tahun</div>
								<div class="words line3">Hari Ini.</div>
								<div class="words line4"></div>
							</div>
							<div class="hearts">
								<div class="heart a1"></div>
								<div class="heart a2"></div>
								<div class="heart a3"></div>
							</div>
						</div>
					</div>
					<!-- <button class="btn btn-primary" id="cake_cut">Lrt's Cut the Cake</button> -->
				</div>


			</div>
			<!-- <div class="col-md-2">
			</div>
			<div class="col-md-2">
			</div>
			<div class="col-md-2">
			</div>
			<div class="col-md-2">
			</div>
			<div class="col-md-2">
			</div> -->
		</div>


	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="effect.js"></script>
<script>
	(function(i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r;
		i[r] = i[r] || function() {
			(i[r].q = i[r].q || []).push(arguments)
		}, i[r].l = 1 * new Date();
		a = s.createElement(o),
			m = s.getElementsByTagName(o)[0];
		a.async = 1;
		a.src = g;
		m.parentNode.insertBefore(a, m)
	})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

	ga('create', 'UA-58229732-1', 'auto');
	ga('send', 'pageview');
</script>

</html>