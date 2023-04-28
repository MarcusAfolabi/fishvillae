<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscriberRequest extends FormRequest
{ 
    public function authorize(): bool
    {
        return true;
    }
 
    public function rules(): array
    {
        return [
            'email' => ['required', 'email', 'valid_email', 'unique:subscribers', 'max:100'],
        ];
    }
}
