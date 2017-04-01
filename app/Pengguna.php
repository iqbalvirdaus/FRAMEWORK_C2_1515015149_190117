<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;
use App\mahasiswa;
use App\Dosen;
use App\peran;


class Pengguna extends Model
{
    protected $table='Pengguna'; 
    protected $fillable=['username','password'];
    protected $guarded=['id'];

    public function mahasiswa(){
    	return $this->hasOne(Mahasiswa::class,'pengguna_id');
    }
    /*public function mahasiswa(){
        return $this->hasOne('App\Mahasiswa','pengguna_id');
    }*/
    
    public function dosen()
    {
    	# code...
    	return $this->hasOne(Dosen::class,'pengguna_id');
    }
    public function peran()
    {
    	# code...
    	return $this->belongsToMany(Peran::class);
    }

}

