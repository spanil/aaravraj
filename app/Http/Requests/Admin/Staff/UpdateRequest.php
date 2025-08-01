<?php

namespace App\Http\Requests\Admin\Staff;

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
         
         return [          
           'title'    => 'required',            
            'name'    => 'required',            
            'image'  => 'nullable',            
            'short_description'  => 'nullable',            
            'description'  => 'nullable',            
            'speciality'  => 'nullable',            
            'degrees'  => 'nullable',            
            'training'  => 'nullable',            
            'contact_info'  => 'nullable',            
            'work_days'  => 'nullable',            
            'status'  => 'nullable',
            'services'  => 'nullable|array',             
        ];
    }

    public function messages()
    {
         return [         
           
            'name.required' => 'Title  is Required.',           
            'title.required' => 'Title  is Required.',           
                      
           
        ];
    }
}
