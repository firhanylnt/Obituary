<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>

	<div class="main-content">
		<!-- start header -->
		@include('includes.header')
		<!-- end header -->
		<!-- start content -->
		@yield('content')
		<!-- end content -->

		<footer class="page-footer bg-grey-dark-key">
			<div class="container">
				<div class="footer-mid">
					<div class="row align-items-center">
						<div class="col-md">
						</div>
						<div class="col-md-auto">
							<div class="footer-social-share-wrapper">
								<div class="footer-social-share">
									<div class="axil-social-title">Find us here</div>
									<ul class="social-share social-share__with-bg">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-youtube"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<p class="axil-copyright-txt">
						© 2020. Cekdiri.id
					</p>
				</div>
			</div>
		</footer>

	</div>
	
	@include('includes.footer')
</body>
</html>