<!DOCTYPE html>
<html lang="en">
<head>
	@include('commons.meta')
	@include('commons.css')
	@include('commons.js')
</head>
<body>
	@include('commons.menu_nav')
	
	<div class="container-fluid">

		<div class="row-fluid">
			@yield('content')
		</div>
	</div><br>

	@include('commons.footer')
</body>
</html>
