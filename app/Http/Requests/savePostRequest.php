<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class savePostRequest extends FormRequest
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

        if  ($this->method() === "PATCH") {

            return [

                "nombreTitulo" => ['required', 'min:3', 'max:45'],  
                "body" => ['required','min:13', 'max:255']
            ];


        }


        return [
            "nombreTitulo" => ['required', 'min:4', 'max:45'],  
            "body" => ['required','min:10', 'max:255']
        ];
    }
}
