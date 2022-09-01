<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPhotosStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'position' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10000',
        ];
    }
}
