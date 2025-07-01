<?php

namespace App\Http\Requests\Admin\Banner;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
          $id = $this->route('category');
          return [         
            'name'    => 'required',       
            'image'  => 'nullable',
            'is_active'  => 'nullable',            
            'order'  => 'nullable',            
            'link'  => 'nullable',              
        ];
    }

    public function messages()
    {
         return [         
           
            'name.required' => 'Name  is Required.',           
           
                      
        ];
    }
}
