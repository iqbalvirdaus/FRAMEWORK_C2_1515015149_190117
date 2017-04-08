<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
/*use App\Pengguna;
use App\dosenmatakuliah;*/

class Dosen extends Model
{
    // 
    protected $table='Dosen';
    protected $fillable=['nama','nip','alamat','pengguna_id'];
    protected $guarded=['id'];

    public function pengguna()
    {
    	# code... 
    	return $this->belongsTo(Pengguna::class);
    }
    public function dosen_matakuliah()
    {
    	# code...
    	return $this->hasMany(DosenMatakuliah::class,'dosen_id');
    }

    public function getUsernameAttribute()
    {
        # code...
        return $this->pengguna->username;
    }

    public function listDosenDanNip()
    {
        # code...
        $out=[];
        foreach ($this->all() as $dsn) {
            # code...
            $out[$dsn->id]="{$dsn->nama} ({$dsn->nip})";
        }
        return $out;   
    }
}
