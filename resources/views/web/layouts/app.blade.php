<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ config('app.name')}}</title>
	<!-- Favicons -->
	<link rel="shortcut icon" href="{{ secure_asset('images/favicon.ico') }}" type="image/x-icon">
	<link rel="icon" href="{{ secure_asset('images/favicon.ico') }}" type="image/x-icon">
	
	<link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ secure_asset('css/freelancer.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
	@include('web.includes.navbar')
	
	@yield('content')
	
	@include('web.includes.footer')

	@include('web.includes.scripts')
</body>
</html>