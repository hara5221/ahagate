<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{ asset('css/style_sp.css') }}" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="antialiased">
	@include("parts.header")
	<div class="mystyle">
		@if (Route::has('login'))

			@auth

			@else

				@if (Route::has('register'))

				@endif
			@endif
			</div>
		@endif
	</div>
	@include("parts.footer")
</body>
</html>
