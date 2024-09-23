<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorepatientRequest extends FormRequest
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
        if (request()->isMethod('post')) {
            $rules = [
                'name' => 'required',
                'phone' => 'required|numeric|digits:10',
                'nat' => 'required',
                'char' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8',
                'img' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ];
        }

        if (request()->isMethod('PUT')) {

            $rules = [
                'name' => 'required',
                'phone' => 'required|numeric|digits:10',
                'nat' => 'required|numeric|digits:12',
                'char' => 'required',
                'email' => 'required|email',
                'img' => 'image|mimes:jpeg,png,jpg|max:2048'
            ];

            // تحقق من وجود قيمة لحقل 'password' قبل تطبيق قاعدة التحقق
            if (strlen(request()->password) > 0) {
                $rules['password'] = 'min:8';
            }
        }

        return $rules;
    }
}