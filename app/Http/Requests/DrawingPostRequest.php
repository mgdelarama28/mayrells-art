<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DrawingPostRequest extends FormRequest
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
            'image_path' => 'mimes:jpeg,bmp,png,jpg|max:10000|required',
        ];
    }

    public function messages()
    {
        return [
            'image_path.mimes' => 'Must be an image!',
            'image.required' => 'Image is required!',
            'image.max' => 'Max file size is 10MB!',
        ];
    }
}
