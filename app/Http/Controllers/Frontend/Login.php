<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller {

    public function index(){
    	if (Auth::check()) {
		    return redirect(route('home.index'));
		}else{
	    	return view('auth.login2');
		}
    }

    public function register(){
    	if (Auth::check()) {
		    return redirect(route('home.index'));
		}else{
	    	return view('auth.regis2');
		}
    }
}