<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorehospitalRequest extends FormRequest
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
        $rules = [
            'name' => 'required',
            'phone' => 'required|numeric|digits:10',
            'spec' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg|max:2048'
        ];

        if (request()->isMethod('post')) {
            $rules['img'] = 'required|' . $rules['img'];
        }

        return $rules;
    }
}
