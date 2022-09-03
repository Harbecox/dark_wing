<?php

namespace App\Http\Requests;

use App\Models\Country;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * @property mixed title
 * @property mixed country
 * @property mixed description
 * @property mixed country_id
 */
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
            'country_id' => ['required',Rule::exists('countries','id')],
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5000',
            'bg_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5000',
        ];
    }
}
