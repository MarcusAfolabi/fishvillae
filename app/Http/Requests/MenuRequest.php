<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
{
     
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:100'],
            'slug' => ['sometimes', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:1000'],
            'price' => ['required', 'numeric', 'max:6'],
            'menu_category' => ['required', 'string', 'max:100'],
            'image' => ['sometimes', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ];
    }
}
