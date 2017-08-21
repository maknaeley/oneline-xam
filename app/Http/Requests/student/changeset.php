<?php

namespace App\Http\Requests\student;

use Illuminate\Foundation\Http\FormRequest;

class changeset extends FormRequest
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
            'email' => 'required|max:30',
            'contact' => 'required|max:13'
        ];
    }
}