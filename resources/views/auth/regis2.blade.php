@extends('layouts.noheader')
	@section('content')
	<div class="main-content">
        <div class="under-construction-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="under-construction-inner-content">
                            <div class="axil-title">
                                <h1 class="h1 m-0">Register</h1>
                            </div>
                            <div class="newsletter-content">
                                <div class="subscription-form-wrapper">
                                    <form method="POST" action="{{ route('admin.register') }}" class="subscription-form no-gutters">
                                    	@csrf
                                        <div class="form-group">
                                            <label for="subscription-name">Enter Your Name</label>
                                            <input type="text" name="name" id="subscription-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="subscription-email">Enter Email Address</label>
                                            <input type="email" name="email" id="subscription-email">
                                        </div>
                                        <div class="form-group">
                                            <label for="subscription-email">Enter Password</label>
                                            <input type="password" name="password" id="subscription-email">
                                        </div>
                                        <div class="form-group">
                                            <button style="margin-left: 0;" type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                                        </div>
                                    </form>

                                    <div class="row">
                                    	<div style="text-align: center" class="col-md-9">
                                    		OR
                                    	</div>
                                    </div>

                                    <form action="#" class="subscription-form no-gutters">
                                        <div class="form-group">
                                            <button style="margin-left: 0;" class="btn btn-default btn-block google">REGISTER WITH GOOGLE</button>
                                        </div>
                                        <div class="form-group">
                                            <button style="margin-left: 0;" class="btn btn-default btn-block facebook">REGISTER WITH FACEBOOK</button>
                                        </div>
                                    </form>
                                
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	@stop