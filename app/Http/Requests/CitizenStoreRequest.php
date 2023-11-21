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
            'nik' => 'required|unique:citizens,nik|regex:/^[0-9]+$/|min:16',
            'tps' => 'required|integer',
            'tps_address' => 'required|string',
            'phone' => 'required|string|regex:/^[0-9]+$/',
            'kelurahan' => 'required|string',
            'kecamatan' => 'required|string',
            'korcam' => 'required|string',
            'no_korcam' => 'required|string|regex:/^[0-9]+$/'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama harus diisi',
            'name.string' => 'Masukan nama dengan format yang benar',
            'nik.required' => 'NIK harus diisi',
            'nik.min' => "NIK memiliki paling sedikit 16 karakter",
            'nik.unique' => 'NIK sudah terdaftar',
            'nik.regex' => 'NIK hanya boleh mengandung angka',
            'tps.required' => 'Nomor TPS harus diisi',
            'tps.integer' => 'Nomor TPS hanya boleh angka',
            'phone.require' => 'Nomor telepon harus diisi',
            'phone.regex' => 'Nomor telepon hanya boleh mengandung angka',
            'phone.string' => 'Masukan nomor telepon dengan benar',
            'tps_address.required' => 'Alamat TPS harus diisi',
            'tps_address.string' => 'Masukan alamat TPS dengan format yang benar',
            'kelurahan.required' => "Keluarahan harus diisi",
            'keluarahan.string' => 'masukan format dengan benar',
            'kecamatan.required' => 'Kecamatan harus diisi',
            'kecamatan.string' => 'Masukan format kecamatan dengan benar',
            'korcam.required' => 'Nama kordinator kecamatan harus diisi',
            'korcam.string' => 'Masukan format nama kordinator kecamatan dengan benar',
            'no_korcam.required' => 'No telepon kordinator kecamatan harus diisi',
            'no_korcam.string' => 'Masukan no telepon kordinator kecamatan dengan benar'
        ];
    }
}
