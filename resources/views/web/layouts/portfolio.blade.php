<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ config('app.name')}}</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/freelancer.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="{{ route('web.home') }}">{{ config('app.name') }}</a>
			<button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			Menu
			<i class="fas fa-bars"></i>
			</button>
		
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item mx-0 mx-lg-1">
						<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('web.home') }}">HOME</a>
					</li>

					<li class="nav-item mx-0 mx-lg-1">
						<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('web.portfolio', 'Baybayin') }}">BAYBAYIN</a>
					</li>

					<li class="nav-item mx-0 mx-lg-1">
						<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('web.portfolio', 'Calligraphy') }}">CALLIGRAPHY</a>
					</li>

					<li class="nav-item mx-0 mx-lg-1">
						<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('web.portfolio', 'Watercolor Art') }}">WATERCOLOR ART</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	@yield('content')
	
	@include('web.includes.footer')

	@include('web.includes.scripts')
</body>
</html>