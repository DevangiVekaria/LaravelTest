<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductPostRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'required',
            'status' => 'required'
        ];
    }
}