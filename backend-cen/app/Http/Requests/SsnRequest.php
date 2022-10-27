<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SsnRequest extends FormRequest
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
            'persone_id'=>['required','unique:ssns,persone_id'],
            'dob'=>['required'],
            'serial_id'=>['required']
        ];
    }
}
