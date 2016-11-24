<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LeaseRequest extends Request
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
            'supplier' => 'required|min:3',
            'unit_type' => 'required',
            'model' => 'required',
            'serial' => 'required',
            'user_leased' => 'required',
            'date_received' => 'required|date',
            'end_contract' => 'required|date',
            'date_surrender' => 'required|date',
            'acompanie_list' => 'required',
            'adepartment_list' => 'required'
        ];
    }

    public function messages()
    {
        return [
           'supplier.required' => 'Supplier field is required',
           'unit_type.required' => 'Unit type is required',
           'model.required' => 'Model field is required',
           'serial.required' => 'Serial is required',
           'user_leased.required' => 'User is required',
           'date_received.required' => 'Received date field is required',
           'end_contract.required' => 'End of contract date field is required',
           'date_surrender.required' => 'Surrender date field is required',
           'acompanie_list.required' => 'Company field is required',
           'adepartment_list.required' => 'Department field is required'
        ];
    }
}
