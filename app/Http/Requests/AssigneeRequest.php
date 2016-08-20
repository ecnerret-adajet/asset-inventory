<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Own;
use App\Adepartment;
use App\Acompanie;

class AssigneeRequest extends Request
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
            'assignee_name' => 'required|min:3',
            'assignee_position' => 'required|min:3',
            'assignee_id' => 'required|min:3',
            'acompanie_list' => 'required',
            'adepartment_list' => 'required'
            
        ];
        
         return $rules;
    }
    
    
    public function messages()
    {
        return [
            'adepartment_list.required' => 'Please select your department',
            'acompanie_list.required' => 'Please select your company.'
        ];
    }
}
