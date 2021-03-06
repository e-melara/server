<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidarTelefono implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if($value===null || $value===""){
            return true;
        }else{
            return preg_match('/(2|6|7){1}[0-9]{3}-([0-9]{4})$/', $value);
        }        
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El formato telefonico no es válido';
    }
}
