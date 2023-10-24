<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Projektrust_ARequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'beschreibung' => 'required|string|max:1000',
            'startdatum' => 'required|date',
            'enddatum' => 'required|date|after:startdatum',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Der Name ist erforderlich.',
            'name.string' => 'Der Name muss ein String sein.',
            'name.max' => 'Der Name darf maximal 255 Zeichen lang sein.',
            'beschreibung.required' => 'Die Beschreibung ist erforderlich.',
            'beschreibung.string' => 'Die Beschreibung muss ein String sein.',
            'beschreibung.max' => 'Die Beschreibung darf maximal 1000 Zeichen lang sein.',
            'startdatum.required' => 'Das Startdatum ist erforderlich.',
            'startdatum.date' => 'Das Startdatum muss ein gültiges Datum sein.',
            'enddatum.required' => 'Das Enddatum ist erforderlich.',
            'enddatum.date' => 'Das Enddatum muss ein gültiges Datum sein.',
            'enddatum.after' => 'Das Enddatum muss nach dem Startdatum liegen.',
        ];
    }
}
