<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransaksiRequest extends FormRequest
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
        return [
            'pelanggan_id' => 'required',
            'berat' => 'required|numeric',
            'metode_pembayaran' => 'required',
            'status_pembayaran' => 'required',
            'antar_laundry' => 'required',
            'paket_laundry_id' => 'required',
        ];
    }
}
