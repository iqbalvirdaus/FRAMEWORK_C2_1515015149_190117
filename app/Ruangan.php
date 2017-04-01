<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    //
    protected $table='Ruangan';
    protected $fillable=['title'];
    protected $guarded=['id'];

   	public function JadwalMatakuliah()
   	{
   		# code...
		return $this->hasMany(JadwalMatakuliah::class,'ruangan_id');   		
   	}
}
