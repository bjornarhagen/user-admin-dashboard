<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name_first', 'name_last', 'email', 'phone_number'
    ];

    public function getNameAttribute()
    {
        return $this->name_first . ' ' . $this->name_last;
    }
}
