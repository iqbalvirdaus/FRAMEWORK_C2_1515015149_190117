<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pengguna;
use App\JadwalMatakuliah;

class Mahasiswa extends Model
{
    protected $table='Mahasiswa';
    protected $fillable=['nama','nim','alamat','pengguna_id'];
    protected $guarded=['id'];
    //$mahasiswa->Pengguna::find(1)->mahasiswa;

    public function Pengguna()
    {
    	# code...  
    	return $this->belongsTo(Pengguna::class);
    }
    /*public function Pengguna()
    {
        # code...
        return $this->belongsTo('App\Pengguna');
    }*/

    public function JadwalMatakuliah()
    {
        # code...
        return $this->hasMany(JadwalMatakuliah::class,'Mahasiswa_id');
    }
}
