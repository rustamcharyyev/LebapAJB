<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:15|max:500'
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
        if(\Illuminate\Support\Facades\App::getLocale() == 'ru') {
            return [
                'name.required' => 'Вы должны ввести свое имя.',
                'phone.required' => 'Вы должны ввести свой номер телефона.',
                'email.required' => 'Вы должны ввести свой адрес электронной почты.',
                'email.email' => 'Введите правильный адрес электронной почты.',
                'subject.required' => 'Вы должны указать тему вашего электронного письма.',
                'subject.min' => 'Тема сообщения, которое вы хотите отправить, должна быть больше или равна 5 буквам.',
                'subject.max' => 'Тема отправляемого сообщения не должна превышать 50 символов.',
                'message.required' => 'Вы должны написать письмо, которое хотите отправить.',
                'message.min' => 'Письмо, которое вы хотите отправить, должно быть больше или равно 15 букв.',
                'message.max' => 'Письмо, которое вы хотите отправить, должно быть не более 500 символов.'
            ];
        }
        else if(\Illuminate\Support\Facades\App::getLocale() == 'en'){
            return [
                'name.required' => 'You must enter your name.',
                'phone.required' => 'You must enter your phone number.',
                'email.required' => 'You must enter your email address.',
                'email.email' => 'Please enter a valid email address.',
                'subject.required' => 'You must indicate the subject of your letter.',
                'subject.min' => 'The subject of the message you want to send must be greater than or equal to 5 letters.',
                'subject.max' => 'Subject of the sent message must not exceed 50 characters.',
                'message.required' => 'You must write the letter you want to send.',
                'message.min' => 'The letter you want to send must be greater than or equal to 15 letters.',
                'message.max' => 'The letter you want to send must be no more than 500 characters.'
            ];
        }
        else{
            return [
                'name.required' => 'Adyňyzy hökman ýazmaly.',
                'phone.required' => 'Telefon belgiňizi hökman ýazmaly.',
                'email.required' => 'Email poçtaňyzy hökman ýazmaly.',
                'email.email' => 'Email poçtaňyzy dogry ýazyň.',
                'subject.required' => 'Ugratjak hatyňyzyň Temasyny hökman ýazmaly.',
                'subject.min' => 'Ugratjak hatyňyzyň Temasynyň harpy 5 harpdan uly ýa-da deň bolmaly.',
                'subject.max' => 'Ugratjak hatyňyzyň Temasynyň harpy 50 harpdan kiçi ýa-da deň bolmaly.',
                'message.required' => 'Ugratjak hatyňyzy hökman ýazmaly.',
                'message.min' => 'Ugratjak hatyňyzyň harpy 15 harpdan uly ýa-da deň bolmaly.',
                'message.max' => 'Ugratjak hatyňyzyň harpy 500 harpdan kiçi ýa-da deň bolmaly.'
            ];
        }


    }
}
