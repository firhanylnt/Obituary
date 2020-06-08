<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\People;
Use \Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){
    	$data['user'] = Auth::user();
    	$data['people'] = People::All();
    	$time = Carbon::now();
    	$data['time'] = $time->format('D , d M Y');
    	return view('pages.home',$data);
    }
}
