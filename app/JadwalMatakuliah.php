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

    public function getNamaMhsAttribute()
    {
        # code...
        return $this->mahasiswa->nama;
    }
    public function getNimAttribute()
    {
        # code...
        return $this->mahasiswa->nim;
    }

    public function getNamaDsnAttribute()
    {
        # code...
        return $this->dosen_matakuliah->dosen->nama;
    }
    public function getNipDsnAttribute()
    {
        # code...
        return $this->dosen_matakuliah->dosen->nip;
    }
    public function getMatkulDsnAttribute() 
    {
        # code...
        return $this->dosen_matakuliah->matakuliah->title;
    }
    public function getTitleruanganAttribute()
    {
        # code...
        return $this->ruangan->title;
    }
    public function listDosenMatakuliah_MahasiswaDanRuangan()
    {
        # code...
        $out=[];
        foreach ($this->all() as $jdwlMatkul) {
            # code...
            $out[$jdwlMatkul->id] ="{$jdwlMatkul->DosenMatakuliah->dosen->nama} 
                {$jdwlMatkul->mahasiswa->nama}
                (Ruangan{$jdwlMatkul->ruangan->title})
            ";
        }
        return $out;
    }
}
