<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotebookStoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required'],
            'company' => ['nullable'],
            'phone' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'birthday' => ['nullable'],
            'image' => ['nullable'],
        ];
    }
}
