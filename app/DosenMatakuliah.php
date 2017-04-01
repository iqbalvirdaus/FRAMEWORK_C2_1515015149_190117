<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Dosen;
class DosenMatakuliah extends Model
{
    //
    protected $table='dosen_matakuliah';
    protected $fillable=['dosen_id','matakuliah_id'];
    protected $guarded=['id'];

    public function Dosen()
    {
    	# code...
    	return $this->belongsTo(Dosen::class);

    }
    public function Matakuliah()
    {
    	# code...
    	return $this->belongsTo(Matakuliah::class);
    }

    public function JadwalMatakuliah()
    {
    	# code...
    	return $this->hasMany(JadwalMatakuliah::class,'dosen_matakuliah_id');
    }
}
 	