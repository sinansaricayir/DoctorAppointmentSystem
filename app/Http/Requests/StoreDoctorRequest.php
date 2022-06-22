<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreDoctorRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required|min:6|max:25',
            'gender'=>'required',
            'education'=>'required',
            'address'=>'required',
            // 'department'=>'required',
            'phone_number'=>'required|numeric',
            'image'=>'required|mimes:jpeg,jpg,png|',
            'role_id'=>'required',
            'description'=>'required'
        ];
    }
}
