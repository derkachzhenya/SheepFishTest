<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
{
  
    public function authorize(): bool
    {
        return true;
    }

  
    public function rules(): array
    {
        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'company_id' => '',
            'email' => 'required|string',
            'phone' => '',
        ];
    }
}
