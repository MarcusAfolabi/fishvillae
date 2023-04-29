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
            'title' => ['required', 'string', 'unique:menus', 'max:100'],
            'slug' => ['sometimes', 'string'],
            'description' => ['required', 'string', 'max:1000'],
            'price' => ['required', 'numeric'],
            'menu_category' => ['required', 'string', 'max:100'],
            'image' => ['sometimes', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ];
    }
}
