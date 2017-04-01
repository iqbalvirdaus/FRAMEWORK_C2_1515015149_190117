<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    //
    Protected $table = 'peran';
    public function Pengguna()
    {
    	# code...
    	return $this->belongsToMany(Pengguna::class);
    }
}

