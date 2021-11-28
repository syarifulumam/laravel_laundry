<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OperatorRequest extends FormRequest
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
        if ($this->method() == 'PUT') {
            return [
                'name' => 'required',
                'email' => 'required|unique:users,email,'.$this->route()->parameter('operator'),
                'role' => 'required',
            ];
        } else {
            return [
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'role' => 'required',
                'password' => 'required|confirmed|min:8',
            ];
        }
        

        
    }
}
