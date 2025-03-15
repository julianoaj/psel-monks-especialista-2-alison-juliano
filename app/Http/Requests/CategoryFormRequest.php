<?php

namespace App\Http\Requests;

class CategoryFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'category1'    => 'min:4',
            'verification' => 'required|integer'
        ];
    }
}