<?php

namespace App\Http\Requests\Admin\Product;

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
          $id = $this->route('product');
          return [          
             'name' => [
                    'required',                
                    Rule::unique('products', 'name')->ignore($id),
                    ],
            'short_description' => 'required|string|max:255',
            'description'       => 'required|string|max:5000',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'price'             => 'required|numeric|min:0',
            'stock_quantity'    => 'required|integer|min:0',
            'is_active'  => 'required',            
            'is_featured'  => 'required', 
            'category_id'  => 'required|array',                         
        ];
    }

    public function messages()
    {
         return [           
            'name.required' => 'Unique name  is required.',
            'short_description.required' => 'Short description is Required.',          
            'description.required' => 'description is Required.',          
            'image.required' => 'Image  is Required.',            
            'price.required' => 'Price  is Required.',            
            'stock_quantity.required' => 'Stock Quantity  is Required.',
             'category_id.required' => 'Category is Required.',        
            
                      
        ];
    }
}
