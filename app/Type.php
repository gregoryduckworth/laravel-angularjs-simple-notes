<?php

namespace App;

class Type extends \Eloquent
{

    // Add your validation rules here
    public static $rules = [
        // 'title' => 'required'
    ];

    public function notes()
    {
        return $this->hasMany('App\Note');
    }

    // Don't forget to fill this array
    protected $fillable = ['type', 'colour'];

}
