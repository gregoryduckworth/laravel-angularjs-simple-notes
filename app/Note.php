<?php

namespace App;

class Note extends \Eloquent
{

    // Add your validation rules here
    public static $rules = [
        // 'title' => 'required'
    ];

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    // Los campos que se pueden completar masivamente.
    protected $fillable = ['title', 'text', 'type_id'];

}
