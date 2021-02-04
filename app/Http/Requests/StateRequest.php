<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StateRequest extends FormRequest
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
                'state_name' => 'required|unique:ship_states,state_name,'.$this->id,
            ];
        }
        return [
            'state_name' => 'required|unique:ship_states',
            'division_id' => 'required',
            'district_id' => 'required',
        ];
    }
}
