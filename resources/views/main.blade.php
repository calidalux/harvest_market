<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>

	<meta charset="utf-8">

	@yield('title')

	<!-- Header CSS (First Sections of Website: compress & paste after release from _header.css here) -->
	<style></style>	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('libs/magnific-popup/magnific-popup.css')}}">

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter32854022 = new Ya.Metrika({
						id:32854022,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true,
						webvisor:true,
						trackHash:true
					});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks");
	</script>
	<!-- /Yandex.Metrika counter -->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64677481-5', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body>

	<section class="header">
		<div class="container-fluid main-screeen">
			<div class="row">
				<div class="col-xs-1">
					<a href="/"><img class="logo" src="{{ asset('img/logo.png') }}" alt="Харвест"></a>
				</div>
				<div class="col-xs-8">
					<div class="row">
						<div class="col-xs-12 top-nav-filter">
							<a class="black" href="/">все шины</a>
							<a class="blue" href="/?filterTireClass=Грузовые+шины">Грузовые шины</a>
							<a class="orange" href="/?filterTireClass=Сельхоз+шины">Сельхоз шины</a>
							<a class="green" href="/?filterTireClass=Индустриальные+шины">Индустриальные шины</a>
							<!-- <a class="black" href="/delivery">Доставка по РФ</a> -->
						</div>
					</div>
					<div class="row">
						<div class="col-xs-9 filter-option">
							<form action="/">
								<input type="text" id="filterTire" name="filterTireSize" value="{{Input::get('filterTireSize')}}" required placeholder="Типоразмер шины (Например 710/70R42)">
								<button class="top-button">Поиск</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-xs-3 info_header">
					Заявки принимаются по телефону: <br>
					<div class="phone">8 (8452) 33-88-50</div><br>
					Пн.-Пт. с 9:00 до 17:00 МСК
				</div>
			</div>
		</div>
	</section>


	@yield('content')


	

	<div class="hidden"></div>

	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="{{ asset('js/typeahead.bundle.js') }}"></script>
	<script src="{{ asset('libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

	<div id="BBTDIV_2155">
	</div>
	<script type="text/javascript">
		if (document.getElementById('BBTDIV_2155')) {
			var BBTSystemDate = new Date();
			document.write('<scr'+'ipt type="text/javascript" async '
				+'src="//code.blablateka.com/2155.js?t='+BBTSystemDate.getYear()+BBTSystemDate.getMonth()
				+BBTSystemDate.getDay()+BBTSystemDate.getHours() + '" charset="utf-8" ></scr'+'ipt>');
		}
	</script>

</body>
</html>