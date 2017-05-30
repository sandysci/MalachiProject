<!DOCTYPE html>
<html>
	@include('layouts.adminview.head')

	<body>
		<div id="wrapper">
		@include('layouts.adminview.navbar')

		@include('layouts.adminview.main')
		</div>
		@include('layouts.adminview.footer')
	</body>
	@yield('footerscripts')
</html>