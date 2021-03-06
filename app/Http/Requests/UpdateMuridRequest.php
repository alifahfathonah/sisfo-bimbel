<?php

namespace App\Http\Requests;

use App\Murid;
use Illuminate\Foundation\Http\FormRequest;

class UpdateMuridRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('murid_edit');
    }

    public function rules()
    {
        return [
            'name'          => [
                'required',
            ],
            'roles_id'      => [
                'required',
                'integer',
            ],
            'jenis_kelamin' => [
                'required',
            ],
            'alamat'        => [
                'required',
            ],
            'sekolah_asal'  => [
                'required',
            ],
            'tempat_lahir'  => [
                'required',
            ],
            'tanggal_lahir' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'paket_id'      => [
                'required',
                'integer',
            ],
        ];
    }
}
