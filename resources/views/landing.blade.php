<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{ asset('images/favicon.ico') }}">
	<title>KENTA MORIMOTO "GREED"</title>
	<!-- Modernizr -->
	<script src="{{ asset('js/modernizr.js')  }}"></script>
	<!-- Open Sans from Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<!-- Main styles file -->
	<link rel="stylesheet" href="{{ asset('css/styles.dev.css') }}" />
	<!-- Icons via Font Awesome -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
	<meta property="og:url" content="https://xs802606.xsrv.jp/kenta-greed/" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="森本ケンタ NEW ALBUM 『GREED』" />
	<meta property="og:description" content="6枚目となるCDアルバム発売決定!インストゥルメンタルに転向して6年目の「今」を詰め込んだ1枚。" />
	<meta property="og:site_name" content="森本ケンタ NEW ALBUM『GREED』（グリード）2024.4.27 Release" />
	<meta property="og:image" content="{{ asset('images/greed.jpg') }}" />
	<style>
        .sponcer_img{
			width: 40%;
			float: left;
			margin: 20px;
		}
    </style>
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BW7B804NDM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BW7B804NDM');
</script>

<body class="color-scheme-neue">
	<!-- Animated background -->
	<canvas id="bg-canvas"></canvas>
	<!--<div class="bg-img view_timer" data-end-date="{{$startTime}}" style="width: 100%; height: 100%; position: fixed; background: url({{ asset('images/gtr.jpg') }}) no-repeat center center; background-size: cover;"></div>-->
    <div class="bg-img view_timer" style="opacity: 0.4; width: 100%; height: 100%; position: fixed; background: url({{ asset('images/greed.jpg') }}) no-repeat center center; background-size: contain;  background-position-y: top;"></div>
	<!-- First screen -->
    <!--count down-->
	<div class="splash">
		<div class="centered-unit">
			<div class="container view_timer" data-end-date="{{$startTime}}">
				<!-- Main header -->
				<!--<h1>Coming soon!</h1> -->
				
				<!-- Sub header -->
				<p class="lead" style="margin-top:150px; line-height: 3em;">KENTA MORIMOTO<br>"GREED"</p>
				
				<!-- Countdown -->
				<div class="countdown circled large" style="margin-top:0px">
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

            <div class="container view_timer" data-start-date="{{$startTime}}">
				<!--<img src="{{ asset('images/tuxedo_logo.png') }}" class="img-responsive mt-5" alt="Tuxedo logo" width="200px" style="margin-top:60px">-->
				
				<p class="lead" style="margin-top:-10px"><br><br></p>
				
				<!--Youtube Here-->
				
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A_EH6RhGRuE" allowfullscreen width="85%" height="400"></iframe>
				</div>
				
				<!--(動画が表示されない場合はこのページを再読み込みしてください)-->
				<!--<p class="lead">Now on Youtube!</p>-->
            </div>
		</div>

	</div>
	
	<!-- Second screen -->
	<div class="overlap">
		<!-- Link "Scroll down to learn more" -->
		
		<a href="" class="more">Scroll down <i class="fa fa-chevron-down"></i> to learn more</a>
		
		<!-- Detailed info -->
		<div class="container few-words">
		<h2>KENTA MORIMOTO NEW ALBUM "GREED"</h2>
		6枚目となるCDアルバム発売決定! インストゥルメンタルに転向して 6年目の「今」を詰め込んだ1枚。<br><br>
		<div class="row">
		{{--
		<div class="col">
			<a href="https://kentamorimoto.shop-pro.jp/" target="_blank"><img src="{{ asset('images/rouge_chirashi_v2.jpg') }}" class="img-responsive mt-5" alt="Rouge Music & Coffee" width="300px"></a>
		
			<br>
			<h4>Music & Coffee「Rouge」2,500円（税込）</h4>
			<a href="https://kentamorimoto.shop-pro.jp/" target="_blank">森本ケンタ 公式 オンラインSHOP</a><br>
			<br>
			「Rouge」を含む3曲をダウンロードできるミュージックカードと、ドリップバッグコーヒーのセット。<br>
			●発売日 2023.10.8<br>
			●内容<br>
			ミュージックカード:1枚（3曲収録・カードデザイン5種）<br>
			ドリップバッグコーヒー（3袋）<br>
			●収録曲<br>
			1.Rouge 2.jaka-jakaja 3.流星群<br>
		</div>
		--}}
		<div class="col">
			<img src="{{ asset('images/album-greed.jpg') }}" class="img-responsive mt-5" alt="NEW ALBUM「GREED」（グリード）3,500円（税込）OKCD-023" width="300px">
			<h4>NEW ALBUM「GREED」（グリード）3,500円（税込）OKCD-023</h4>
			森本ケンタの6枚目のインストゥルメンタルアルバム「GREED」。アルバムリリースは約2年ぶりとなる今作、インストゥルメンタルに転向して6年目の「今」を詰め込んだ1枚。 ゲストプレイヤーにクラビオーラ奏者の折重由美子をはじめ、ギタリスト小田原政広、そして森本ケンタトリオとしても活動を共にする森川泰介(パーカッション)・川岡光一(チェロ)を迎えてのレコーディング。 独自の世界観と斬新なアプローチ、口ずさみたくなるようなメロディラインの魅力が詰まった、聞き応えのあるアルバムに仕上がりました。音楽活動20年目に突入直前の意欲作がここに完成！
		</div>
		</div>
			<div class="row">
				<!-- First column -->
				<div class="col col-heading">
				<h4>News</h4>
				<hr>

				4/27発売 アルバム『GREED』<br>
				収録曲<br>
				1.GREED <br>
				2.Rouge <br>
				3.Tuxedo <br>
				4.cappuccino <br>
				5.Phantom <br>
				6.流星群 <br>
				7.jaka-jakaja<br> 
				8.Julieta Trio ver. <br>
				9.Memories <br>
				10.Good Day Bossa Nova ver. <br>
				<br>
				<br>
				All Music by Kenta Morimoto  <br>				
<br>
<br>

				メディア告知出演情報<br>
				（2024.4.11現在）<br>
				<br>
				●4/13(土) 新曲初披露！<br>
				RCCラジオ『森本ケンタのハッピータイムRADIO♪』<br>
				提供：はつかいちサンブレイズ<br>
				<br>
				●4/15(月) 出演時間18:20〜予定<br>
				RCCラジオ『それ聴け！カープ 』<br>
				<br>
				●4/16(火)出演時間17:10〜予定<br>
				NHKラジオ『ひろしまコイらじ 』<br>
				<br>
				●4/22(月)出演時間10:30〜予定<br>
				FM はつかいち 『キラキラ☆アートBOX』<br>
				<br>
				●4/22(月)出演時間13:30〜予定<br>
				FMちゅーピー『広島すまいるパフェ』<br>
				<br>
				●4/25(木)発売<br>
				『TJ Hiroshima』5月号掲載<br>
				<br>
				●4/25(木)出演時間17:45〜予定<br>
				エフエムふくやま『イブニングステーション 』<br>
				<br>
				●5/9(木)出演時間10:15〜予定<br>
				広島FM 『神原隆秀のGOOD JOB 』<br>
				<br>
				※追加情報やスケジュールが変更する場合もございますので、詳しくは公式サイトのスケジュールからご確認ください<br>
				</div>
				<!-- Second column -->
				<div class="col col-content">
					<br><br><br>
					Kenta Morimoto played on Guitar <br>
					Taisuke Morikawa played on Percussion (M1,2,3,4,5,6,7,8,9) <br>
					Koichi Kawaoka played on Five-Strings Cello(M12,3,5,6,7,8) <br>
					<br>
					-Additional Musicians-  <br>
					Yumiko Orishige played on Piano(M1,4,9)   <br>
					Masahiro Odahara played on Guitar(M10) <br>
					<br>
					<br>
					Recording at スタジオ コバト,nyan2 studio L.A.<br>
					Recording Engineer : Isamu Harada <br>
					Mixing Engineer : Isamu Harada <br>
					Mastering Engineer : Isamu Harada  <br>
					Art Direction & Design : Ryuji Mizuoka (Arsdesign)  <br>
					Photography :Takahiro Umemura <br>
					Stylist : ako <br>
					Hair : Tsuyoshi Kobayashi (ABLAZE) <br>
					<br>
					office KENTA staff:Mayu Misaka,Mika Yamamura,Kohei Okano <br>
					<br>
					Artists Manager : Akiko Kanei  <br>
					Special Thanks  <br>
					Blue Stripe / 森本ケンタ後援会 <br>
					Mr. Hiroki / W the Bride's Suite<br>
				</div>
				<!-- Third column -->
				<div class="col col-contacts">
				<h4>Web</h4>
					<p class="text-center">
					<!--<h4><i class="fa fa-globe"></i>&nbsp;&nbsp;Web</h4>-->
					<i class="fa fa-home"></i>&nbsp;&nbsp;Kenta Morimoto Official<br>
					<a href="https://morimotokenta.com" target="_blank">https://morimotokenta.com</a><br>
					<br>
					<i class="fa fa-instagram"></i>&nbsp;&nbsp;Instagram <br>
					<a href="https://www.instagram.com/kenta57morimoto/" target="_blank">https://www.instagram.com/kenta57morimoto/</a><br>
					<br>
					<i class="fa fa-calendar"></i>&nbsp;&nbsp;Schedule<br>
					<a href="https://morimotokenta.com/schedule/" target="_blank">https://morimotokenta.com/schedule/</a><br>
					<br>
					<i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Shop<br>
					<a href="https://morimotokenta.com/onlineshop.shtml" target="_blank">https://morimotokenta.com/onlineshop.shtml</a><br>
					<br>
					<i class="fa fa-smile-o"></i>&nbsp;&nbsp;Fan Club<br>
					<a href="https://morimotokenta.com/fc/" target="_blank">https://morimotokenta.com/fc/</a><br>
					<br>
					</p>
				</div>
			<!-- Detailed info block end -->
			</div>
		</div>

		<div class="col" style="text-align: center; width: 100%;">
			協賛企業<br><br>
			<img src="{{ asset('images/sponcer/01.png') }}" class="sponcer_img" alt="協賛">
			<img src="{{ asset('images/sponcer/02.png') }}" class="sponcer_img" alt="協賛">
			<img src="{{ asset('images/sponcer/03.png') }}" class="sponcer_img" alt="協賛">
			<img src="{{ asset('images/sponcer/04.png') }}" class="sponcer_img" alt="協賛">
			<img src="{{ asset('images/sponcer/05.png') }}" class="sponcer_img" alt="協賛">
			<img src="{{ asset('images/sponcer/06.png') }}" class="sponcer_img" alt="協賛">
			<img src="{{ asset('images/sponcer/07.png') }}" class="sponcer_img" alt="協賛">
			<img src="{{ asset('images/sponcer/08.png') }}" class="sponcer_img" alt="協賛">
			<img src="{{ asset('images/sponcer/09.png') }}" class="sponcer_img" alt="協賛">
		</div>

		<!-- Footer -->
		<div class="footer">			
			<div class="container">
				&copy; 2024 office KENTA, All rights reserved.
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
			endTime: new Date("{{$startTime}}")
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