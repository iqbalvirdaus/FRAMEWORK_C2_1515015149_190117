<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DosenMatakuliah;
class matakuliah extends Model
{
    //
    protected $table='matakuliah';
    protected $fillable=['title','keterangan'];
    protected $guarded=['id'];
    
 public function DosenMatakuliah()
 {
 	# code...
 	return $this->hasMany(DosenMatakuliah::class,'matakuliah_id');
 }

 
}
