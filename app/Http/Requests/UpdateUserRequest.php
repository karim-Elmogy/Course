<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name'=>'required|string|max:191',
            'phone'=>'required|string|max:191|unique:users,phone,'.$this->id,
            'password'=>'nullable|string|confirmed',
            'email'=>'required|email|string|max:191|unique:users,email,'.$this->id,
            'is_active'=>'required|boolean',
            'role'=>'required|in:admin,super_admin,client',
        ];
    }
}
