<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalMatakuliah extends Model
{
    //
    protected $table='jadwal_matakuliah';
    protected $fillable=['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
    protected $guarded=['id'];

    public function Mahasiswa()
    {
        # code...
        return $this->belongsTo(Mahasiswa::class);
    }
    
    public function Ruangan()
    {
        # code...
        return $this->belongsTo(Ruangan::class);
    }
    
    public function DosenMatakuliah()
    {
        # code...
        return $this->belongsTo(DosenMatakuliah::class);
    }
    
}
