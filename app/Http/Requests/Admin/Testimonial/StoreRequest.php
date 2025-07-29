<?php

namespace App\Http\Requests\Admin\Testimonial;

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
            'client_name'    => 'required',            
            'client_title'  => 'required',            
            'client_company'  => 'required',            
            'testimonial_text'  => 'required',            
                     
        ];
    }

    public function messages()
    {
        return [
           
            'client_name.required' => 'Name  is Required.',           
            'client_title.required' => 'Title  is Required.',            
            'client_company.required' => 'Company   is Required.',            
            'testimonial_text.required' => 'Description  is Required.',            
        ];
    }
}
