<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }

    // Get all the active users in alphabetical order
    public function getActiveUsersSortedAttribute()
    {
        return $this->users()->where('deleted', 0)->orderBy('name_first', 'asc')->get();
    }
}
