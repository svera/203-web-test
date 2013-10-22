<?php

class UserSeeder extends DatabaseSeeder
{
    public function run()
    {
        $users = [
            [
                "email" => "demo@example.com",
                "password" => Hash::make("demo"),
            ]
        ];
        foreach ($users as $user)
        {
            User::create($user);
        }
    }
}