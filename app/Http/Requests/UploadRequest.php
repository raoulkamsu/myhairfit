<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
           
            'image1' => 'image|mimes:jpeg,bmp,png|size:2000'
            'image2' => 'image|mimes:jpeg,bmp,png|size:2000'
            'image3' => 'image|mimes:jpeg,bmp,png|size:2000'
            'image4' => 'image|mimes:jpeg,bmp,png|size:2000'
            'image5' => 'image|mimes:jpeg,bmp,png|size:2000'
            'image6' => 'image|mimes:jpeg,bmp,png|size:2000'
            'image7' => 'image|mimes:jpeg,bmp,png|size:2000'
            'image8' => 'image|mimes:jpeg,bmp,png|size:2000'
        ];
    }
}
