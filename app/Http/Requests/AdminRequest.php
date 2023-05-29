<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'name1' => 'required|min:5',
            'cat' => 'required',
            'message1' => 'required|min:15',
            'img_1' => 'required|image:jpg,png,jpeg'
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
            'name1.required' => 'Ady hökman ýazmaly.',
            'name1.min' => 'Ady hökman 5 harpa deň ýa-da uly bolmaly ýazmaly.',
            'cat.required' => 'Kategoriýasyny hökman saýlaň.',
            'message1.required' => 'Goýjak bolýan täzeligiňizi hökman ýazmaly.',
            'message1.min' => 'Goýjak bolýan täzeligiňiziň harpy 15 harpdan uly ýa-da deň bolmaly.',
            'img_1.required' => 'Goýjak bolýan täzeligiňiziň suradyny hökmän ugradyň.',
            'img_1.image' => 'Goýjak bolýan täzeligiňiziň ugradan zadyňyz surat bolmaly.'
        ];
    }

}
