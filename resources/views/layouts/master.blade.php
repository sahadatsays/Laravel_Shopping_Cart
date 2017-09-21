<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ URL::to('src/css/bootstrap.min.css')}}">
	<link href="{{URL::to('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ URL::to('src/css/custom.css') }} ">
	@yield('styles')
</head>
<body>
@include('partials.header')
<div class="container">
	@yield('content')
</div>


<script src="{{ URL::to('src/js/jquery.min.js') }}"></script>
<script src="{{ URL::to('src/js/bootstrap.min.js') }}"></script>
@yield('scripts')
</body>
</html>