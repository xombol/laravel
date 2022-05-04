<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'osn_par1' => 'required',
            'osn_par2' => 'required',
            'osn_par3' => 'required',
            'osn_par4' => 'required',
            'strop_par1' => 'required',
            'strop_par2' => 'required',
            'obres_par1' => 'required',
            'obres_par2' => 'required',
            'obres_par3' => 'required',
            'status' => 'required'
        ];
    }

}
