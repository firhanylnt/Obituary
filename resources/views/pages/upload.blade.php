@extends('layouts.frontend')
	@section('content')

	<section class="contact-form section-gap bg-grey-light-three ">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-12">
					<div class="axil-contact-form-block m-b-xs-30">
						<div class="section-title d-block">
							<h2 class="h3 axil-title m-b-xs-20">
								Upload Korban Pandemi Covid-19
							</h2>
						</div>

						<div class="axil-contact-form-wrapper p-t-xs-10">
							<form class="row no-gutters" method="POST" action="{{ route('upload_data') }}" enctype="multipart/form-data">
								@csrf
								<input type="hidden" name="user_id" value="{{ $user->id }}">
								<div class="form-group col-12">
									<input type="file" name="foto" id="file">
								</div>

								<div class="form-group col-12">
									<label for="name">Nama</label>
									<input type="text" name="nama" id="nama">
								</div>
								
								<div class="form-group col-md-6 col-sm-12 col-xs-12">
									<label>Tempat Lahir</label>
									<input type="text" name="tempat_lahir" id="tempat_lahir">
								</div>

								<div class="form-group col-md-6 col-sm-12 col-xs-12">
									<label>Tanggal Lahir</label>
									<input type="date" name="tanggal_lahir" id="tanggal_lahir">
								</div>

								<div class="form-group col-12">
									<label for="alamat">Alamat</label>
									<input type="text" name="alamat" id="alamat">
								</div>

								<div class="form-group col-12">
									<label for="profesi">Profesi</label>
									<input type="text" name="profesi" id="profesi">
								</div>

								<div class="form-group col-12">
									<label for="kenangan">Kenangan</label>
									<textarea rows="8" name="kenangan" id="kenangan"></textarea>
								</div>

								<div class="form-group col-12">
									<button style="margin-left: 0;" type="submit" class="btn btn-primary btn-block">SUBMIT</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	@stop