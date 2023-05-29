<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatRequest extends FormRequest
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
            'name' => 'required|min:5',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'your name'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Kategoriýanyň adyny hökman ýazmaly.',
            'name.min' => 'Kategoriýanyň ady hökman 5 harpa deň ýa-da uly bolmaly ýazmaly.',
        ];
    }

}
