<!DOCTYPE html>
<html lang="fr">

<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="ie=edge" http-equiv="X-UA-Compatible">
		<!-- Fonts -->
		<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
		<title>Document | @yield('title')</title>
		@vite('resources/css/app.css')
		{{-- favicon --}}
		<link href="https://www.volvocars.com/static/shared/images/favicons/favicon-16x16.v2.svg" rel="icon"
				type="image/svg+xml">
		{{-- font roboto --}}
		<link href="https://fonts.googleapis.com" rel="preconnect">
		<link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
		@include('partials.navbar._nav')
		@yield('content')
		@include('partials.footer._footer')
</body>

</html>
