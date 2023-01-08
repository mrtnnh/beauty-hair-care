<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' =>['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255','unique:users'],
            'tell' =>['required','regex:/^0[-0-9]{9,12}$/'],
            'postcode' =>['required','regex:/^(([0-9]{3}-[0-9]{4})|([0-9]{7}))$/'],
            'prefecture' =>['required'],
            'address_city' =>['required','string','max:50'],
            'address_street' =>['required','string','max:50'],
            'building'=>['max:50'],

        ];
    }
}
