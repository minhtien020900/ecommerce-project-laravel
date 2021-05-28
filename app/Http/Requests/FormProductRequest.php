<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
//        dd($request->input('category_id'));
        return [
            //
            'product_name'=>'bail|required',
            'product_price'=>'bail|required|',
            'category_id'=>'bail|required|nullable',
            'brand_id'=>'bail|required|nullable',
            'product_desc'=>'required'
        ];
    }
}
