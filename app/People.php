<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
	protected $table = 'people';
	protected $fillable = ['user_id' ,'nama' ,'tanggal_lahir' ,'tempat_lahir' ,'alamat' ,'profesi' ,'kenangan' , 'foto' ,'created_at' ,'updated_at' ];
    public $timestamps = false;
}
