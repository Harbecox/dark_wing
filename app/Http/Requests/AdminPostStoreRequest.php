<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPostStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'context' => 'required',
            'intro' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'image' => 'required|image',
        ];
    }
}
