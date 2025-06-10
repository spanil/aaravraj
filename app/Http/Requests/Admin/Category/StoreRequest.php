<?php

namespace App\Http\Requests\Admin\Category;

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
            'parent_id'     => 'nullable|integer|exists:categories,id',
            'name'    => 'required|unique:categories,name',            
            'image'  => 'required',            
            'is_active'  => 'required',            
            'description'  => 'required',            
        ];
    }

    public function messages()
    {
        return [
           
            'name.required' => 'unique Name  is Required.',
            'phone.required' => 'Phone No. is Required.',          
            'image.required' => 'Image  is Required.',            
        ];
    }
}
