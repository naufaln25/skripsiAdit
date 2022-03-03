<?php

namespace App\Http\Requests\User\Checkout;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $tanggalValidation = date('d M Y');
        return [
            'jam_sewa' => 'required|string',
            'durasi' => 'required|numeric',
            'tanggal_sewa' => 'required|date|after_or_equal:'.$tanggalValidation
        ];
    }
}
