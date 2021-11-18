<?php

namespace App\Http\Requests\requests;

use Illuminate\Foundation\Http\FormRequest;

class ValRequest extends FormRequest
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
            'name'=>'required|string',
            'phone'=>'numeric',
            'email'=>'required|email',
            'password'=>'required',
            'deprt'=>'required',
        ];

    }
    public function messages()
    {

        return [
            'name.required' =>'Trainer name required',
            'phone.numeric' =>'phone must be numeric',
            'email.required' =>'email required',
            'deprt.required' =>'deprt required',

        ];
    }
}
