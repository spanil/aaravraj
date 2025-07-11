<?php

namespace App\Http\Requests\Admin\Service;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [          
            'title'    => 'required',            
            'image'  => 'required',            
            'short_description'  => 'nullable',            
            'description'  => 'nullable',            
            'status'  => 'nullable',            
        ];
    }

    public function messages()
    {
        return [
           
            'name.required' => 'Title  is Required.',           
            'image.required' => 'Image  is Required.',            
        ];
    }
}
