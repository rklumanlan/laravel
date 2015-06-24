<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
	@include('layouts.header')
	@include('flash::message');
	@yield('content')
	@include('layouts.footer')
	<!-- Scripts -->
	<script src="{{ asset('/js/jquery.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.prettyPhoto.js') }}"></script>
	<script src="{{ asset('/js/main.js') }}"></script>
	<script src="{{ asset('/js/inputmodals.js') }}"></script>
	<script>
		$('#flash-overlay-modal').modal();
	</script>
</body>
</html>
