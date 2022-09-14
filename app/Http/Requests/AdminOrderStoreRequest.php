<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminOrderStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'firstName' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'deliveryAirport' => 'required',
            'deliveryDay' => 'required',
            'deliveryTime' => 'required',
            'company' => 'required'
        ];
    }
}
