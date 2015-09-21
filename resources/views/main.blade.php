<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>

	<meta charset="utf-8">

	<title>Заголовок</title>
	<meta name="description" content="">

	<!-- Header CSS (First Sections of Website: compress & paste after release from _header.css here) -->
	<style></style>

	<!-- Fonts Loader from _fonts.css (HTML5 LocalStorage) -->
	<script>!function(){function e(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function t(e){return window.localStorage&&localStorage.font_css_cache&&localStorage.font_css_cache_file===e}function n(){if(window.localStorage&&window.XMLHttpRequest)if(t(o))a(localStorage.font_css_cache);else{var n=new XMLHttpRequest;n.open("GET",o,!0),e(n,"load",function(){4===n.readyState&&(a(n.responseText),localStorage.font_css_cache=n.responseText,localStorage.font_css_cache_file=o)}),n.send()}else{var c=document.createElement("link");c.href=o,c.rel="stylesheet",c.type="text/css",document.getElementsByTagName("head")[0].appendChild(c),document.cookie="font_css_cache"}}function a(e){var t=document.createElement("style");t.innerHTML=e,document.getElementsByTagName("head")[0].appendChild(t)}var o="_fonts.css";window.localStorage&&localStorage.font_css_cache||document.cookie.indexOf("font_css_cache")>-1?n():e(window,"load",n)}();</script>
	
	<!-- Load CSS Compilled without JS -->
	<noscript><link rel="stylesheet" href="compiled.min.css"></noscript>
	
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


	
</head>

<body>

	<section class="header">
		<div class="container main-screeen">
			<div class="row">
				<div class="col-md-1 col-sm-1 col-xs-2">
					<img class="logo" src="{{ asset('img/logo.png') }}" alt="harvest-logo">
				</div>
				<div class="col-md-5 col-sm-6 col-xs-5 ">
					<div class="logo_descript">
						<span class="harvest">ООО "ХАРВЕСТ"</span>
						<br>
						Поставка грузовых и сельскохозяйственных шин
					</div>
				</div>
				<div class="col-md-6  col-xs-5">
					<div class="phone">
						8 (8452) 33-88-50
					</div>
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

	<!-- Load CSS (remove/comment after release) -->
	<script>
	//Load Libs CSS
	var ms=document.createElement("link");ms.rel="stylesheet";
	ms.href="libs/animate/animate.css";document.getElementsByTagName("head")[0].appendChild(ms);

	//Header Styles (compress & paste to header after release)
	var ms=document.createElement("link");ms.rel="stylesheet";
	ms.href="_header.css";document.getElementsByTagName("head")[0].appendChild(ms);
	
	//User Styles
	var ms=document.createElement("link");ms.rel="stylesheet";
	ms.href="_main.css";document.getElementsByTagName("head")[0].appendChild(ms);
	var ms=document.createElement("link");ms.rel="stylesheet";
	ms.href="_media.css";document.getElementsByTagName("head")[0].appendChild(ms);
</script>



<!-- Load CSS compiled without Bootstrap & Header styles (after release) -->
<script>var ms=document.createElement("link");ms.rel="stylesheet";
	// ms.href="compiled.min.css";document.getElementsByTagName("head")[0].appendChild(ms);
</script>



<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/typeahead.bundle.js') }}"></script>



</body>
</html>