<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LaptopRequest extends Request
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
            'acompanie_list' => 'required',
            'model' => 'required|min:3',
            'serial' => 'required|min:3',
            'finance_code' => 'required',
            'it_code' => 'required'
        ];
    }

    public function messages()
    {
        return [
             'acompanie_list.required' => 'This field is required'
        ];
    }
}
