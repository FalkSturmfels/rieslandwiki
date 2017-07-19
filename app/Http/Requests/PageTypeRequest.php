<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageTypeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'displayName' => 'required|min:3|max:30',
            'type' => 'required|min:3|max:30',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'displayName.required' => 'Bitte geben Sie einen Anzeigename ein.',
            'displayName.min' => 'Ein Anzeigename muss mindestens :min Zeichen haben.',
            'displayName.max' => 'Ein Anzeigename darf höchstens :max Zeichen haben.',
            'type.required' => 'Bitte geben Sie einen Typ ein.',
            'type.min' => 'Ein Typ muss mindestens :min Zeichen haben.',
            'type.max' => 'Ein Typ darf höchstens :max Zeichen haben.',
        ];
    }
}
