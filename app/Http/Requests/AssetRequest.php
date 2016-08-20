<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Own;

class AssetRequest extends Request
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
            'model' => 'required|min:3',
            'own_list' => 'required',
         
        ];
    }
    
        public function messages()
    {
        return [
            
            'own_list.required' => 'This field is required',
            'model.required' => 'This field is required'
        ];
    }
}
