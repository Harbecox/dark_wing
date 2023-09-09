<?php

namespace App\Http\Requests;

use App\Models\Country;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminAirportStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required',
//            'country_id' => ['required',Rule::exists('countries','id')],
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5000',
            'bg_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5000',
        ];
    }
}
