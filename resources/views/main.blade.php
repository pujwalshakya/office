<!DOCTYPE html>
<html>
@include('partial.style')
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Blank Page - Ace Admin</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	@include('partial.header')
	@yield('content')
	@include('partial.script')
	@include('partial.footer')
</html>