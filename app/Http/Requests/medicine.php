<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class medicine extends FormRequest
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
            'name' => 'required',
            'desc' => 'required',
            'qint' => 'required|numeric',
            'expired' => 'required|date',
            'COO' => 'required|string',
        ];
    }
    // public function messages(): array
    // {
    //     return [
    //         'name.required' => trans('ar.name.required'),
    //         'desc.required' => trans('ar.desc.required'),
    //         'qint.required' => trans('ar.qint.required'),
    //         'expired.required' => trans('ar.expired.required'),
    //         'COO.required' => trans('ar.COO.required'),
    //     ];
    // }
}
