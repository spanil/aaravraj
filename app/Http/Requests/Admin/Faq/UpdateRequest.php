<?php

namespace App\Http\Requests\Admin\Faq;

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
            'question'    => 'required',            
            'answer'  => 'required',       
        ];
    }

    public function messages()
    {
         return [         
           
            'question.required' => 'Question  is Required.',           
            'answer.required' => 'Answer  is Required.',     
           
        ];
    }
}
