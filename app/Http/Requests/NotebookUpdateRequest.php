<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotebookUpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['min:5'],
            'company' => ['nullable'],
            'phone' => ['min:10'],
            'email' => ['email', 'max:254'],
            'birthday' => ['nullable'],
            'image' => ['nullable'],
        ];
    }
}
