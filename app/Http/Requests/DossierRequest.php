<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DossierRequest extends FormRequest
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
            "nomDoc"=>"required|max:15|string",
            "descDoc"=>"required|max:30|string"
            //
        ];
    }
    public function messages(){
        return [
            "nomDoc.required"=>"le titre de dossier est obligatoire",
            "descDoc.required"=>"la description de dossier est obligatoire",
            "nomDoc.max"=>"le titre de dossier doit avoire au minimum 5 characteres",
            "descDoc.max"=>"la description doit avoire au minimum 5 characteres"
        ];
    }
}
