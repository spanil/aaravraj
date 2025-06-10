<?php

namespace App\Http\Requests\Admin\Category;

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
            'parent_id'     => 'nullable|integer|exists:categories,id',
             'name' => [
                    'required',                
                    Rule::unique('categories', 'name')->ignore($id),
                    ],           
            'image'  => 'nullable',
            'is_active'  => 'required',            
            'description'  => 'nullable',              
        ];
    }

    public function messages()
    {
         return [           
            'name.required' => 'unique Name  is Required.',
            
                      
        ];
    }
}
