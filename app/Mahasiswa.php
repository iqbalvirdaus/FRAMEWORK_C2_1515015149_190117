<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


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
    public function JadwalMatakuliah()
    {
        # code...
        return $this->hasMany(JadwalMatakuliah::class,'mahasiswa_id');
    }
    public function listMahasiswaDanNim()
    {
        # code...
        $out=[];
        foreach ($this->all() as $mhs) {
            # code...
            $out[$mhs->id]="{$mhs->nama} ({$mhs->nim})"; 
        }
        return $out;
    }
    public function getUsernameAttribute()
    {
        # code...
        return $this->pengguna->username;
    }
   

  
}
