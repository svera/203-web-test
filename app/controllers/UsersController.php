<?php

use Illuminate\Support\MessageBag;

class UsersController extends BaseController {

    /**
     * Controller constructor, applies a filter to check wether a user is logged in
     * or not, redirecting depending on the case
     */
    public function __construct()
    {
        $this->beforeFilter('redirectIfLoggedIn');
    }

    public function create()
    {
        $interests = DB::table('interests')->lists('name', 'id');
        return View::make('users/create')->with(['interests' => $interests]);
    }

    /**
     * Saves a new user into the database if the passed data is correct
     */
    public function store()
    {
        $validator = Validator::make(
            Input::all(),
            User::getValidationRules()
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