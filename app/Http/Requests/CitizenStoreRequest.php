<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CitizenStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'nik' => 'required|unique:citizens,nik|regex:/^[0-9]+$/',
            'tps' => 'required|integer',
            'tps_address' => 'required|string',
            'phone' => 'required|string|regex:/^[0-9]+$/'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama harus diisi',
            'name.string' => 'Masukan nama dengan format yang benar',
            'nik.required' => 'NIK harus diisi',
            'nik.unique' => 'NIK sudah terdaftar',
            'nik.regex' => 'NIK hanya boleh mengandung angka',
            'tps.required' => 'Nomor TPS harus diisi',
            'tps.integer' => 'Nomor TPS hanya boleh angka',
            'phone.require' => 'Nomor telepon harus diisi',
            'phone.regex' => 'Nomor telepon hanya boleh mengandung angka',
            'phone.string' => 'Masukan nomor telepon dengan benar',
            'tps_address.required' => 'Alamat TPS harus diisi',
            'tps_address.string' => 'Masukan alamat TPS dengan format yang benar'

        ];
    }
}
