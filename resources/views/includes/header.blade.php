<div class="side-nav">
	<div class="side-nav-inner nicescroll-container">

		<div class="side-nav-content">
			<div class="row ">
				<div class="col-md-12">
					<ul class="main-navigation side-navigation list-inline flex-column">
						@guest
							<li><a href="{{ route('login.index') }}">Login</a></li>
							<li><a href="{{ route('login.register') }}">Register</a></li>
						@else
							<li>Hi , {{ $user->name }}</li>
							<li>
								<a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
							</li>
							<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">@csrf</form>
						@endguest
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="close-sidenav" id="close-sidenav">
		<div></div>
		<div></div>
	</div>
</div>

<header class="page-header">
	<div class="header-top bg-grey-dark-one">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md">
					<ul class="header-top-nav list-inline justify-content-center justify-content-md-start">
						<li class="current-date">{{ $time }}</li>
					</ul>
				</div>
				<div class="col-md-auto">
					<ul class="ml-auto social-share header-top__social-share">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar bg-white">
		<div class="container">
			<div class="navbar-inner">
				<div class="brand-logo-container">
					<a href="{{ url('/') }}">
						<div style="margin-top: 1em;">
							<h3>OBITUARY</h3>
						</div>
					</a>
				</div>
				<div class="main-nav-wrapper">
					<ul class="main-navigation list-inline" id="main-menu">
						@guest
						<li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">HOME</a></li>
						@else
						<li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">HOME</a></li>
						<li class="{{ Request::is('upload') ? 'active' : '' }}"><a href="{{ url('upload') }}">UPLOAD</a></li>
						@endguest
					</ul>
				</div>
				<div class="navbar-extra-features ml-auto">
					<a href="#" class="side-nav-toggler" id="side-nav-toggler">
						<span></span>
						<span></span>
						<span></span>
					</a>
				</div>
				<div class="main-nav-toggler d-block d-lg-none" id="main-nav-toggler">
					<div class="toggler-inner">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
		</div>
	</nav>
</header>