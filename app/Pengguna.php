<?php

namespace App;
 
use Illuminate\Auth\Authenticatable;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

/*use App\mahasiswa;
use App\Dosen;
use App\peran;*/


/*class Pengguna extends Model implements AuthenticatableContract*/
class Pengguna extends Authenticable
{
  /*  use Authenticatable;*/
    protected $table='Pengguna'; 
    protected $fillable=['username','password'];
    protected $guarded=['id'];

    public function mahasiswa(){
    	return $this->hasOne(Mahasiswa::class,'pengguna_id');
    }
    
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

