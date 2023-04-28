<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
 
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'string', 'max:100'],
            'phone' => ['sometimes', 'string', 'max:100'],
            'email' => ['sometimes', 'email', 'max:100'],
            'adult' => ['sometimes', 'string', 'max:100'],
            'children' => ['sometimes', 'string', 'max:100'],
            'kids' => ['sometimes', 'string', 'max:100'],
            'date' => ['required', 'string', 'max:100'],
            'time' => ['required', 'string', 'max:100'],
            'status' => ['sometimes', 'string', 'max:100'],
            'payment_link' => ['sometimes', 'url'],
            'payment_approved' => ['sometimes', 'string', 'max:100'],
        ];
    }
}
