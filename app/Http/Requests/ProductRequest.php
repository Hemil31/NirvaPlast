<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'file_path' => 'required|max:2048',
            'image' => 'nullable|image|max:2048',
            'content' => 'nullable|string',
            'status' => 'required|integer|in:0,1',
        ];
    }

    public function messages(): array
    {
        return [
            'product_name.required' => 'The product name field is required.',
            'file_path.required' => 'The file field is required.',
            'file_path.max' => 'The file may not be greater than 2MB.',
            'status.required' => 'The status field is required.',
            'status.in' => 'The status field must be either Active or Inactive.',
        ];
    }
}
