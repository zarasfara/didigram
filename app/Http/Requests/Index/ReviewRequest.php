<?php

namespace App\Http\Requests\Index;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            'name' =>'required',

            'email' => 'required|email',

            'message' =>'required',

            'file' => 'required|file|image|mimes:jpg,jpeg,png,bmp|max:2000'
        ];
    }
}
