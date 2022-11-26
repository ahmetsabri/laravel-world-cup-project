<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeamRequest extends FormRequest
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


    public function prepareForValidation()
    {
        $this->merge([
            'matches_played' => $this->won + $this->draw + $this->lost
        ]);
    }

    public function rules()
    {

        return [
            'won' => ['required','integer', 'between:0,3'],
            'draw' => ['required','integer', 'between:0,3'],
            'lost' => ['required','integer', 'between:0,3'],
            'goals_for' => ['required', 'integer'],
            'goals_against' => ['required', 'integer'],
            'matches_played' => ['required','integer' ,'between:0,3']
        ];
    }
}
