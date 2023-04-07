<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KENTA MORIMOTO TRIO presents "Tuxedo"</title>
	<!-- Modernizr -->
	<script src="{{ asset('js/modernizr.js')  }}"></script>
	<!-- Open Sans from Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<!-- Main styles file -->
	<link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
	<!-- Icons via Font Awesome -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
	<meta property="og:url" content="https://xs802606.xsrv.jp/kenta-tuxedo/" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="KENTA MORIMOTO TRIO presents Tuxedo" />
	<meta property="og:description" content="森本ケンタトリオ新曲タキシード予告サイト" />
	<meta property="og:site_name" content="KENTA MORIMOTO TRIO presents Tuxedo" />
	<meta property="og:image" content="{{ asset('images/gtr.jpg') }}" />
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7710TGENDN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7710TGENDN');
</script>

<body class="color-scheme-neue">
	<!-- Animated background -->
	<canvas id="bg-canvas"></canvas>
	<div class="bg-img view_timer" data-end-date="April 7, 2023 21:57:00 UTC+0900" style="width: 100%; height: 100%; position: fixed; background: url({{ asset('images/gtr.jpg') }}) no-repeat center center; background-size: cover; "></div>
    <div class="bg-img view_timer" data-start-date="April 7, 2023 21:57:00 UTC+0900" style="width: 100%; height: 100%; position: fixed; background: url({{ asset('images/trio.jpg') }}) no-repeat center center; background-size: cover; "></div>
	<!-- First screen -->
    <!--count down-->
	<div class="splash">
		<div class="centered-unit">
			<div class="container view_timer" data-end-date="April 7, 2023 21:57:00 UTC+0900">
				<!-- Main header -->
				<!--<h1>Coming soon!</h1> -->
				
				<!-- Sub header -->
				<img src="{{ asset('images/tuxedo_logo.png') }}" class="img-responsive mt-5" alt="Tuxedo logo" width="60%">
				<p class="lead">KENTA MORIMOTO TRIO<br>presents</p>
				
				<!-- Countdown -->
				<div class="countdown circled large" style="margin-top:5px">
					<!-- Days -->
					<div class="time days">
						<div class="value">00</div>
						<div class="unit">Days</div>
					</div>
					<!-- Hours -->
					<div class="time hours">
						<div class="value">00</div>
						<div class="unit">Hours</div>
					</div>
					<!-- Minutes -->
					<div class="time minutes">
						<div class="value">00</div>
						<div class="unit">Minutes</div>
					</div>
					<!-- Seconds -->
					<div class="time seconds">
						<div class="value">00</div>
						<div class="unit">Seconds</div>
					</div>
				</div>
				<!-- Countdown end -->
				
			</div>

            <div class="container view_timer" data-start-date="April 7, 2023 21:57:00 UTC+0900">
				<p class="m-5"></p>
				<img src="{{ asset('images/tuxedo_logo.png') }}" class="img-responsive mt-5" alt="Tuxedo logo" width="50%">
				<p class="m-5"></p>
				<!--Youtube Here-->
				(動画が表示されない場合はこのページを再読み込みしてください)
				<p class="lead">Now on Youtube!</p>
            </div>
			<div class="social">
						<a href="https://www.youtube.com/user/MorimotoKentaTV" class="social-icon" target="_blank">
							<i class="fa fa-youtube fa-lg"></i>
						</a>
						<a href="https://www.facebook.com/profile.php?id=100043091613250" class="social-icon" target="_blank">
							<i class="fa fa-facebook fa-lg"></i>
						</a>
						<a href="https://morimotokenta.com/" class="social-icon" target="_blank">
							<i class="fa fa-laptop fa-lg"></i>
						</a>
			</div>
			
		</div>

	</div>
	
	<!-- Second screen -->
	<div class="overlap">
		<!-- Link "Scroll down to learn more" -->
        <!--
		<a href="" class="more">Scroll down <i class="fa fa-chevron-down"></i> to learn more</a>
        -->
		<!-- Detailed info -->
			<div class="container few-words">
			<h2>KENTA MORIMOTO TRIO presents "Tuxedo"</h2>
			<p class="text-center">
						Composer & guitar / Kenta Morimoto<br>
			Five strings cello / Koichi Kawaoka<br>
			Percussion / Taisuke Morikawa<br>
			<br>
			<br>
			Manager / Akiko Kanei<br>
			Photographer / Takahiro Umemura<br>
			Stylist / ako<br>
			Video grapher / Tomoo Ueda & Hiroko Nishizawa<br>
			<br>
			Special thanks / Mr.Hiroki<br>
			<br>
			＝＝＝＝＝＝＝WEB＝＝＝＝＝＝＝＝<br>
			▼Kenta Morimoto Official<br>
			<a href="http://www.morimotokenta.com/index.html" target="_blank">http://www.morimotokenta.com/index.html</a><br>
			<br>
			▼Facebook <br>
			<a href="https://www.facebook.com/profile.php?id=100043091613250" target="_blank">https://www.facebook.com/profile.php?id=100043091613250</a><br>
			<br>
			▼schedule<br>
			<a href="https://morimotokenta.com/schedule/" target="_blank">https://morimotokenta.com/schedule/</a><br>
			<br>
			▼SHOP<br>
			<a href="https://kentamorimoto.shop-pro.jp/?mode=srh" target="_blank">https://kentamorimoto.shop-pro.jp/?mode=srh</a><br>
			<br>
			▼ Fan Club<br>
			<a href="https://morimotokenta.com/fc/" target="_blank">https://morimotokenta.com/fc/</a><br>
			<br>
			▼office<br>
			<a href="https://morimotokenta.com/jobrequest.shtml" target="_blank">https://morimotokenta.com/jobrequest.shtml</a><br>
			<br>	
				</p>
			</div>
			
		<!-- Detailed info block end -->



		<!-- Footer -->
		<div class="footer">
			<div class="container">
				&copy; 2023 office KENTA, All rights reserved.
			</div>
		</div>
		<!-- Footer end -->
	</div>
	
	<!-- JavaScripts -->
	
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/countdown.js') }}"></script>
	<script src="{{ asset('js/bezierCanvas.js') }}"></script>
	<script src="{{ asset('js/notifyMe.js') }}"></script>
	
	<script type="text/javascript">
	$().ready(function(){
		
		// Activate countdownTimer plugin on a '.countdown' element
		$(".countdown").countdownTimer({
			// Set the end date for the countdown
			endTime: new Date("April 7, 2023 21:57:00 UTC+0900")
		});
		
		
		// Activate notifyMe plugin on a '#notifyMe' element	
		$("#notifyMe").notifyMe();
		
			
		// Activate bezierCanvas plugin on a #bg-canvas element
		$("#bg-canvas").bezierCanvas({
			maxStyles: 3,
			maxLines: 80,
			strokeWidth: 0.5,
			lineSpacing: 0.07,
			spacingVariation: 0.07,
			colorBase: {r: 100,g: 120,b: 200},
			colorVariation: {r: 50, g: 50, b: 50},
			moveCenterX: 0,
			moveCenterY: 0,
			delayVariation: 4,
			globalAlpha: 0.4,
			globalSpeed:200,
		});
		
		// Add handler on 'Scroll down to learn more' link
		$().ready(function(){
			$(".overlap .more").click(function(e){
				e.preventDefault();
				$("body,html").animate({scrollTop: $(window).height()});
			});
		});		
		
        // タイマー表示
        countdown();
        setInterval(countdown, 1000);
        function countdown() {
            //console.log("待ってね..");
            $(".view_timer").each(function(index, target) {
                var startDate = $(this).attr("data-start-date");
                var endDate = $(this).attr("data-end-date");
                var nowDate = new Date();

            	if (startDate) {
                    startDate = new Date(startDate);
                } else {
                startDate = nowDate;
                }
                if (endDate) {
                    endDate = new Date(endDate);
                }

                if (startDate <= nowDate && (!endDate || nowDate <= endDate)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
        });
        }

	});
    
	</script>

</body>
</html>