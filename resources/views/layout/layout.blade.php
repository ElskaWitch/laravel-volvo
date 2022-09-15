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
</head>

<body>
		@include('partials.navbar._nav')
		@yield('content')
</body>

</html>
