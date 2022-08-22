<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){

        return true;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){

        return [
            'contact' => 'required',
            'password' => 'required'
        ];

    }

    public function getCredentials(){

        // The form field for providing contact or password
        // have name of "contact", however, in order to support
        // logging users in with both (contact and email)
        // we have to check if user has entered one or another

        $contact = $this->get('contact');

        if ($this->isEmail($contact)) {
            return [
                'email' => $contact,
                'password' => $this->get('password')
            ];
        }

        return $this->only('contact', 'password');
        
    }

    /**
     * Validate if provided parameter is valid email.
     *
     * @param $param
     * @return bool
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */

    private function isEmail($param){

        $factory = $this->container->make(ValidationFactory::class);

        return ! $factory->make(
            ['contact' => $param],
            ['contact' => 'email']
        )->fails();

    }  

}
