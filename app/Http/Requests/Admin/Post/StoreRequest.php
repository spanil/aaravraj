<?php

namespace App\Http\Requests\Admin\Post;

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
            'title_en'    => 'required',            
            'title_np'    => 'required',            
            'image'  => 'required',            
            'description_en'  => 'required',            
            'description_np'  => 'required',            
            'status'  => 'nullable',            
            'order'  => 'nullable',            
        ];
    }

    public function messages()
    {
        return [
           
            'title_en.required' => 'Name  is Required.',           
            'title_np.required' => 'Name  is Required.',           
            'description_en.required' => 'Description  is Required.',           
            'description_np.required' => 'Description  is Required.',           
            'image.required' => 'Image  is Required.',
        ];
    }
}
