<?php

class InterestsSeeder extends DatabaseSeeder
{
    public function run()
    {
        $interests = [
            ["name" => "Cars"],
            ["name" => "Girls"],
            ["name" => "Programming"]
        ];
        foreach ($interests as $interest) {
            Interest::create($interest);
        }
    }
}