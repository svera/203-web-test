<?php

use Illuminate\Support\MessageBag;

class SessionsController extends BaseController
{
    /**
     * Controller constructor, applies a filter to check wether a user is logged in
     * or not, redirecting depending on the case
     */
    public function __construct()
    {
        $this->beforeFilter('redirectIfLoggedIn', ['except' => 'destroy']);
    }

    /**
     * Shows the login form
     */
    public function create()
    {
        return View::make("sessions/create");
    }

    /**
     * Checks the passed email/password combinations against the database
     */
    public function store()
    {
        $validator = Validator::make(
            Input::all(),
            [
                'email'    => 'required|email',
                'password' => 'required'
            ]
        );
        if ($validator->passes()) {
            $credentials = [
                'email'    => Input::get('email'),
                'password' => Input::get('password')
            ];
            if (Auth::attempt($credentials)) {
                return Redirect::route('home')->with('message', 'Login succesful');
            } else {
                $data["errors"] = new MessageBag([
                    "password" => [
                        "Username and/or password invalid."
                    ]
                ]);
                return View::make("sessions.create", $data);
            }
        }
        return Redirect::route('sessions.create')->withInput()->withErrors($validator);
    }

    /**
     * Logout the current logged user
     */
    public function destroy()
    {
        Auth::logout();
        return Redirect::route('home')->with('message', 'Logged out successfully');
    }
}