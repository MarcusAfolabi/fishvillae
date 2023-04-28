<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupportRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'support_category' => ['sometimes', 'string', 'max:100'],
            'title' => ['sometimes', 'string', 'unique:supports', 'max:100'],
            'subtitle' => ['sometimes', 'string', 'max:100'],
            'slug' => ['sometimes', 'string'],
            'content' => ['sometimes', 'string', 'max:100'],
            'image' => ['sometimes', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            
        ];
    }
}
