<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCivitasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'txtnik' => 'required|unique:civitas,nik|min:16|max:17',
            'txtnama' => 'required',
            'txtusername' => 'required',
            'txtlevel' => 'required',
            'txtstatus' => 'required',

        ];
    }
}
