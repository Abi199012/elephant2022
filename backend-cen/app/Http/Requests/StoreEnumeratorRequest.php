<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnumeratorRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'f_name'=>['required'],
            'm_name'=>['required'],
            'l_name'=>['required'],
            'user_name'=>['required'],
            'enum_area'=>['required'],
            'phone'=>['required'],
        ];
    }
}
