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
            'product_name' => ['bail','required','string','unique:products,product_name,{$this->product->id}'],
            'product_price' => 'bail|required|numeric',
            'category_id' => 'bail|required|nullable',
            'brand_id' => 'bail|required|nullable',
            'product_desc' => 'required',
            'images' => 'required',
            'images.*' => 'mimes:jpeg,jpg,png|max:2048'
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
        $attribute['images.*']='Image file';
        return $attribute;

    }
}
