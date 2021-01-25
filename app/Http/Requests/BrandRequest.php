<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
        if(isset($this->id)){
            return[
                'brand_name_en' => 'required|unique:brands,brand_name_en,'.$this->id,
                'brand_name_bn' => 'required|unique:brands,brand_name_bn,'.$this->id
            ];
        }
        return [
            'brand_name_en' => 'required|unique:brands',
            'brand_name_bn' => 'required|unique:brands'
        ];
    }
}
