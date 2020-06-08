<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>

	<div class="main-content">
		<!-- start header -->
		<!-- end header -->
		<!-- start content -->
		@yield('content')
		<!-- end content -->

	</div>
	
	@include('includes.footer')
</body>
</html>