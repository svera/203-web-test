<?php

use Illuminate\Auth\UserInterface;

class User extends Eloquent implements UserInterface {

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];

    /**
     *  Validation rules of the model
     * 
     * @var array
     */
    protected static $rules = [
        'email'                 => ['required', 'unique:users'],
        'password'              => ['required', 'regex:/^(?=\S*[a-zA-Z]{6,})(?=\S*[\d])(?=\S*[\W])\S*$/'],
        'password_confirmation' => ['required', 'same:password']
    ];

    /**
     * Define a many to many relationship with the Interest model
     */
    public function interests()
    {
        return $this->belongsToMany('Interest');
    }
    
    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the model validation rules
     * 
     * @return array
     */
    public static function getValidationRules()
    {
        return self::$rules;
    }
}