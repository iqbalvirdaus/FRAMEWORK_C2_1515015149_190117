<?php
 
namespace App\Http\Requests;

use App\Http\Requests\Request;

class mahasiswarequest extends Request
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
            'nama'=>'required',
            'nim'=>'required|integer',
            'alamat'=>'required',
            'username'=>'required',
        ];
        if ($this->is('mahasiswa/tambah')) {
            # code...
            $validasi['password'] = 'required';
        }
        return $validasi;
    }
}
