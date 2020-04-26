<!DOCTYPE html>
<html>
<head>
	<title>@yield('title-block')</title>
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	@include('inc.header')

	@if(Request::is('/'))
	@include('inc.hero')
	@endif
	<div class="container mt-5">
		<div class="row">
			<div class="col-8">
				@yield('content')
			</div>

			<div class="col-4">
				@include('inc.aside')
			</div>
		</div>
	</div>
	
	
	@include('inc.footer')
</body>
</html> 