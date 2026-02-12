<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOfficeRequest extends FormRequest
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
        $id = $this->route('office')->id;

        return [
            'name' => 'required|max:50|unique:offices,name,' . $id,
            'address' => 'required|max:255|unique:offices,address,' . $id,
            'post_code' => 'nullable|size:7',
            'stair' => 'required|integer',
            'comment' => 'nullable|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => '施設名は必須です。',
            'name.unique' => '施設名は既に存在します。',
            'address.required' => 'ビル名は必須です。',
            'address.unique' => 'ビル名は既に存在します。',
            'stair.required' => '階数は必須です。',
            'stair.integer' => '階数は整数で入力してください。',
        ];
    }
}
