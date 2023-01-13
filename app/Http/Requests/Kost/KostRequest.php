<?php

namespace App\Http\Requests\Kost;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class KostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'unique:'. Kost::class],
            'description' => ['required'],
            'tipe_kost' => ['required', Rule::in(['Male', 'Female', 'Campur'])],
            'jumlah_kamar' => ['required', 'numeric', 'min: 1'],
            'jumlah_penghuni' => ['required', 'numeric'],
            'ukuran_kamar' => ['required'],
            'price' => ['required', 'numeric', 'min: 1000'],
            'jatuh_tempo' => ['required'],
            'alamat' => ['required'],
            'kecamatan' => ['required'],
            'kabupaten' => ['required'],
            'provinsi_id' => ['required', 'exists:provinces'],
            'kode_pos' => ['required', 'numeric', 'min: 1'],
            'facility_id' => ['required', 'exists:facilities'],
            'image' => ['required', 'mimes: jpeg, jpg, png, gif']
        ];
    }
}
