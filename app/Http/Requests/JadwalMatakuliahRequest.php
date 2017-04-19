<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class JadwalMatakuliahRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $validasi=[ 
            'ruangan_id'=>'required|integer',
            'dosen_matakuliah_id'=>'required|integer',
            'mahasiswa_id'=>'required|integer',
        ];/*
        if ($this->is('mahasiswa/tambah')) {
            # code...
            $validasi['password'] = 'required';
        }*/
        return $validasi;
    }
}
