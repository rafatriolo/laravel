<?php

namespace TesteLaravel\Validators;


use Prettus\Validator\LaravelValidator;

class ClientValidators extends LaravelValidator
{
    protected $rules = [
      'name' => 'required|max:255',
      'responsable' => 'required|max:255',
      'email' => 'required|email',
      'phone' => 'required',
      'address' => 'required'
    ],
}