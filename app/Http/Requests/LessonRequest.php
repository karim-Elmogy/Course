<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
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
            'ar_name'=>'required|string|max:191',
            'en_name'=>'required|string|max:191',
            'ar_descr'=>'required|string',
            'en_descr'=>'required|string',
            'image'=>'sometimes|image',
            'url'=>'required',
            'duration'=>'required',
            'is_active'=>'required|boolean',
            'course_id'=>'required',
        ];
    }
}
