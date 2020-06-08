@extends('layouts.frontend')
	@section('content')
	<section class="section-gap section-gap-top__with-text top-stories bg-grey-light-three" style="padding-top: 1em;">
		<div class="container">
			<div class="row">
				<div class="axil-our-team section-gap" style="padding-top: 1em;">
					<div class="container">

						<h3>
							Mengenang Korban Pandemi Covid-19
						</h3>

						<div class="axil-team-grid-wrapper p-t-xs-10">
							<div class="row">
								@foreach($people as $pip)
								<div class="col-lg-4">
									<div class="axil-team-block m-b-xs-30">
										<a href="#" class="d-block img-container">
											<img style="width: 100%;" src="{{ asset('uploads/'.$pip->foto)}}" alt="team member 1">
										</a>

										<div class="axil-team-inner-content text-center">
											<h3 class="axil-member-title hover-line"><a href="#">{{$pip->nama}}</a></h3>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@stop