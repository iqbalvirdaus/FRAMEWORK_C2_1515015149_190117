<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;
use App\dosenmatakuliah;

class RelationshipRebornController extends Controller
{
    //
    public function ujiHas()
    {
    	# code...
    	return Dosen::has('dosen_matakuliah')->get();
    }
    public function ujiDoesntHave()
    {
    	# code...
    	return	Dosen::doesntHave('dosen_matakuliah')->get();	
    }
    

}
