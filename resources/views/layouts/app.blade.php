<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name') }} @yield('title')</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<!-- Custom styles for this template -->
	<link href="/css/style.css" rel="stylesheet">
	@yield('css')
	<script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>
	@include('layouts.nav')

	@include('layouts.flash')
	<!-- Page Content -->
	<main class="container" role="main">

	@yield('content')

	</main>
	<!-- /.container -->
	{{-- @include('layouts.footer') --}}

</body>
</html>
