<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
        $uuid = $this->user;

        return [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'password' => ['required', 'min:4', 'max:14'],
            'email' => ['required', 'max:255', "unique:users,email,{$uuid},uuid"],
            'device_name' => ['required', 'string', 'max:200']
        ];
    }
}
