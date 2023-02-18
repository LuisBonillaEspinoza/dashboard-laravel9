<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//Si se quiere hacer mas compleja o robusta para usar el email
use Illuminate\Contracts\Validation\Factory as ValidationFactory;


class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required',
            'password' => 'required',
        ];
    }

    //Si es un email entra a la  funcion, en caso contrario va a rules
    public function getCredentials(){
        $username = $this->get('username');
        
        if($this->isEmail('username')){
            return [
                'email' => $username,
                'password' => $this->get('password')
            ];
        }
        return $this->only('username','password');
    }

    //Si es un correo retorna verdadero
    public function isEmail($value){
        $factory = $this->container->make(ValidationFactory::class);

        return !$factory->make(['username' => $value],['username' => 'email'])->fails();
    }
}
