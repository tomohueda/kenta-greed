<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{ asset('images/favicon.ico') }}">
	<title>KENTA MORIMOTO TRIO presents "Rouge"</title>
	<!-- Modernizr -->
	<script src="{{ asset('js/modernizr.js')  }}"></script>
	<!-- Open Sans from Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<!-- Main styles file -->
	<link rel="stylesheet" href="{{ asset('css/styles.dev.css') }}" />
	<!-- Icons via Font Awesome -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
	<meta property="og:url" content="https://xs802606.xsrv.jp/kenta-rouge/" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="KENTA MORIMOTO TRIO presents Rouge" />
	<meta property="og:description" content="新曲「Rouge」は、ギター・チェロ・パーカッションの森本ケンタトリオのために森本ケンタが書き下ろした、セクシーでアンニュイな魅力を放つナンバー" />
	<meta property="og:site_name" content="森本ケンタトリオ『Rouge』2023.10.8 Release" />
	<meta property="og:image" content="{{ asset('images/landing_image_13.21.jpg') }}" />
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
	<!--<div class="bg-img view_timer" data-end-date="{{$startTime}}" style="width: 100%; height: 100%; position: fixed; background: url({{ asset('images/gtr.jpg') }}) no-repeat center center; background-size: cover;"></div>-->
    <div class="bg-img view_timer" style="width: 100%; height: 100%; position: fixed; background: url({{ asset('images/landing_image_13.21.jpg') }}) no-repeat center center; background-size: contain;  background-position-y: top;"></div>
	<!-- First screen -->
    <!--count down-->
	<div class="splash">
		<div class="centered-unit">
			<div class="container view_timer" data-end-date="{{$startTime}}">
				<!-- Main header -->
				<!--<h1>Coming soon!</h1> -->
				
				<!-- Sub header -->
				<p class="lead" style="margin-top:10px">KENTA MORIMOTO TRIO<br>presents</p>
				
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

            <div class="container view_timer" data-start-date="{{$startTime}}">
				<!--<img src="{{ asset('images/tuxedo_logo.png') }}" class="img-responsive mt-5" alt="Tuxedo logo" width="200px" style="margin-top:60px">-->
				<!--
				<p class="lead" style="margin-top:-10px">KENTA MORIMOTO TRIO now on Youtube!</p>
				-->
				<!--Youtube Here-->
				<!--
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VIrxjOtWKuk" allowfullscreen width="85%" height="400"></iframe>
				</div>
				-->
				<!--(動画が表示されない場合はこのページを再読み込みしてください)-->
				<!--<p class="lead">Now on Youtube!</p>-->
            </div>
			<!--
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
			-->
		</div>

	</div>
	
	<!-- Second screen -->
	<div class="overlap">
		<!-- Link "Scroll down to learn more" -->
		
		<a href="" class="more">Scroll down <i class="fa fa-chevron-down"></i> to learn more</a>
		
		<!-- Detailed info -->
		<div class="container few-words">
		<h2>KENTA MORIMOTO TRIO presents "Rouge"</h2>
		新曲「Rouge」は、ギター・チェロ・パーカッションの森本ケンタトリオのために森本ケンタが書き下ろした、セクシーでアンニュイな魅力を放つナンバー。<br><br>
		<div class="row">
			
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
			新曲『Rouge』を含む全3曲<br>
		</div>
		

		</div>
			<div class="row">
				<!-- First column -->
				<div class="col col-heading">
				<h4>News</h4>
				<!--<hr>
				●森本ケンタ『Tuxedo』<br>
				ミュージックビデオ<br>
				<a href="https://youtu.be/VIrxjOtWKuk" target="_blank">https://youtu.be/VIrxjOtWKuk</a><br>
					-->
				<hr>
				【発売イベント】<br>
				10/8発売<br>
Music & Coffee『Rouge』<br>
■ラジオ出演情報<br>
<br>
●9/30(土) 新曲初披露！<br>
RCCラジオ 「森本ケンタのハッピータイムRADIO♪』<br>
提供：はつかいちサンブレイズ<br>
<br>
●10/2(月) 出演時間10:30 予定<br>
FM はつかいち 『キラキラ☆アートBOX』<br>
<br>
●10/2(月)出演時間13:30 予定<br>
FMちゅーぴー 『広島すまいるパフェ 』<br>
<br>
●10/2(月)出演時間18:00 予定<br>
RCCラジオ『それ聴けveryカープ 』<br>
<br>
●10/3(火)出演時間13:10 予定<br>
RCCラジオ『おひるーな 』<br>
<br>
●10/9(月祝)出演時間17:15 予定<br>
FMふくやま 『イブニングステーション 』<br>
<br>
●10/12(木)出演時間10:15 予定<br>
広島FM 『神原隆秀のGOODJOG 』<br>
<br>
※変更する場合もございますので、詳しくは公式サイトのスケジュールからご確認ください<br>
<br>
<br>
■リリースLIVE<br>
<br>
Music & Coffee「Rouge」<br>
発売イベント（10月）<br>
<br>
●10/8（日）<br>
会場：広島駅南口地下広場特設ステージ<br>
時間：13:00<br>
出演：森本ケンタトリオ（森本ケンタ・森川泰介・川岡光一）<br>
<br>
※観覧無料<br>
※販売は12:30 予定<br>
※ステージ後にサイン会<br>
※発売日5種類購入特典：森本ケンタトリオと記念撮影会<br>
<br>
<br>
●10/9（月祝）<br>
会場：そごう広島店正面玄関前<br>
時間：14:00 <br>
※観覧無料<br>
※販売・サイン会は、そごう広島店本館5階Hiroshimarche Etto内で行います<br>
<br>
<br>
「美味しいコーヒー淹れますよ」<br>
会場：そごう広島店本館5階エスカレーター横<br>
時間：15:00 <br>
料金：Tallman’s Cafe Premium  1杯 550円（税込）<br>
※テイクアウトのみとなります<br>
※サイン会とコーヒーのお渡しは同じ列でお並び下さい<br>
※コーヒーカウンターの周りに立ち止まらないようお願い致します<br>
<br>
<br>
●10/14（土）<br>
会場：フジグラン神辺<br>
時間：①11:00 ／ ②14:00<br>
<br>
※観覧無料<br>
※ステージ後に販売・サイン会を行います<br>
<br>
<br>
●10/28（土）<br>
会場：イオンタウン防府<br>
時間：①13:00 ／②15:00<br>
<br>
※観覧無料<br>
※ステージ後に販売・サイン会を行います<br>
<br>
<br>
●10/29（日）フレスタモールカジル横川ハロウィンナイト2023ゲスト<br>
会場：カジル横川特設ステージ<br>
時間：16:30<br>
<br>
※観覧無料<br>
※ステージ後に販売・サイン会を行います
				</div>
				<!-- Second column -->
				<div class="col col-content">
					<h4>Staff</h4>
Composer & guitar<br>&nbsp;&nbsp;&nbsp;&nbsp;Kenta Morimoto<br><br>
Cello<br>&nbsp;&nbsp;&nbsp;&nbsp;Koichi Kawaoka<br><br>
Percussion<br>&nbsp;&nbsp;&nbsp;&nbsp;Taisuke Morioka<br><br>
<br>
Recording engineer<br>&nbsp;&nbsp;&nbsp;&nbsp;Masaoka Odahara<br>
&nbsp;&nbsp;&nbsp;&nbsp;Isamu Harada<br><br>
Mixing & mastering<br>&nbsp;&nbsp;&nbsp;&nbsp;Isamu Harada<br><br>
<br>
Art director & designer<br>&nbsp;&nbsp;&nbsp;&nbsp;Ryuji Mizuoka<br><br>
<br>
Photographer<br>&nbsp;&nbsp;&nbsp;&nbsp;Takahiro Umemura<br><br>
Stylist<br>&nbsp;&nbsp;&nbsp;&nbsp;Ako<br><br>
Hair<br>&nbsp;&nbsp;&nbsp;&nbsp;Tsuyoshi Kobayashi (ABLAZE)<br><br>
<br>
MV Cinematographer<br>&nbsp;&nbsp;&nbsp;&nbsp;Tomoh Ueda<br>
&nbsp;&nbsp;&nbsp;&nbsp;Hiroko Nishizawa<br><br>
MV Editor & Web<br>&nbsp;&nbsp;&nbsp;&nbsp;Tomoh Ueda<br><br>
<br>
Special thanks<br>&nbsp;&nbsp;&nbsp;&nbsp;Makoto Furuya (BAR LUX)<br>
&nbsp;&nbsp;&nbsp;&nbsp;Tadaaki Yoshioka / Mr. Hiroki<br><br>
<br>
Happiman<br>&nbsp;&nbsp;&nbsp;&nbsp;Kohei Okano<br><br>
Artist manager<br>&nbsp;&nbsp;&nbsp;&nbsp;Akiko Kanei<br><br>

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