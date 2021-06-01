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

        return [
            //
            'product_name' => 'bail|required',
            'product_price' => 'bail|required|',
            'category_id' => 'bail|required|nullable',
            'brand_id' => 'bail|required|nullable',
            'product_desc' => 'required',
            'images' => 'mimes:jpeg,bmp,png'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute is required'];
    }

    public function attributes()
    {
        $attribute = $this->rules();

        foreach ($attribute as $key => $rule) {
            $arrField = preg_split("/_/", $key);
            if (in_array('id', $arrField)) {
                unset($arrField[array_search('id', $arrField)]);
            }
            $convertText = implode(' ', $arrField);
            $attribute[$key] = ucfirst($convertText);

        }
        return $attribute;

    }
}
