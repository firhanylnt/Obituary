<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\People;


class UploadController extends Controller
{

    public function index(){
    	$data['user'] = Auth::user();
    	return view('pages.upload',$data);
    }

    public function upload_data(Request $request){
    	// validate file
    	$request->validate([
            'foto' => 'required|mimes:jpeg,jpg,png|max:4096',
        ]);

    	// upload foto
        $str_name = str_replace(' ', '_', $request->nama);
        $filename = $str_name.'.'.$request->foto->extension();
        $request->foto->move(public_path('uploads'), $filename);

        $now = date('Y-m-d H:i:s');
        // upload data
        People::create([
            'nama'     => $request->nama,
            'user_id'     => $request->user_id,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'tempat_lahir'     => $request->tempat_lahir,
            'alamat'     => $request->alamat,
            'profesi'     => $request->profesi,
            'kenangan'     => $request->kenangan,
            'foto'     => $filename,
            'created_at'     => $now,
            'updated_at'     => $now,
        ]);

        return redirect()->back();

    }
}
