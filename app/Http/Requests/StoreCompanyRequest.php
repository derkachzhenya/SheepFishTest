<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|string',
            'image' => 'required|image|mimes:png,jpg,jpeg|min:100',
            'website' => 'required|string',

        ];
    }
}
