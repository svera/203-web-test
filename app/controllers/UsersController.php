<?php

class UsersController extends BaseController {

    public function create()
    {
        return View::make('users/create');
    }

    /**
     * Saves a new user into the database if the passed data is correct
     */
    public function store()
    {
        $validator = Validator::make(
            Input::all(),
            [
                'email'                 => ['required', 'unique:users'],
                'password'              => ['required'],
                'password_confirmation' => ['required', 'same:password']
            ]
        );
        if ($validator->passes()) {
            $user = new User;
            $user->email    = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->save();
            if ($user->id) {
                return Redirect::route('home')->with('message', 'User created');
            }
        }
        return Redirect::route('users.create')->withInput()->withErrors($validator);
    }
}