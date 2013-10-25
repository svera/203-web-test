<?php

class Interest extends Eloquent {
    protected $fillable = array('name');

    /**
     * Define a many to many relationship with the User model
     */
    public function users()
    {
        return $this->belongsToMany('User');
    }

}