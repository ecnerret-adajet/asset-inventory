<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DisposalRequest extends Request
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
            'condition_code' => 'required|min:3',
            'disposal_reason' => 'required|min:3',         
        ];
    }
}
