<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDonorRequest extends FormRequest
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
                'password' => 'required|min:8',
                'email' => 'required|email',
                'phone' => 'required|numeric|digits:10',
                'img' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ];
        }

        if (request()->isMethod('PUT')) {

            $rules = [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|numeric|digits:10',
                'img' => 'image|mimes:jpeg,png,jpg|max:2048'
            ];


            if (strlen(request()->password) > 0) {
                $rules['password'] = 'min:8';
            }
        }

        return $rules;
    }
}