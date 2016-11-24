<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PersonallaptopRequest extends Request
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
            'user_laptop' => 'required',
            'model' => 'required',
            'serial_no' => 'required',
            'purpose' => 'required',
            'approved_by' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'user_laptop.required' => 'User field is required',
            'model.required' => 'Model field is required',
            'serial_no.required' => 'Serial number field is required',
            'purpose.required' => 'Purpose field is required',
            'approved_by.required' => 'Approver field is required'
        ];
    }
}
