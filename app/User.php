<?php

namespace App;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name_first', 'name_last', 'email', 'phone_number'
    ];

    // Combine first and last name
    public function getNameAttribute()
    {
        return $this->name_first . ' ' . $this->name_last;
    }

    public function validate()
    {
        return self::validator($this->toArray())->validate();
    }

    public static function validator(array $data)
    {
        // Get a comma seperated list of all customer ids
        $customer_ids = Customer::pluck('id')->toArray();
        $customer_ids = implode(',', $customer_ids);

        return Validator::make($data, [
            'name_first' => ['required', 'string'],
            'name_last' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone_number' => ['required', 'numeric'],
            'customer_id' => ['required', 'in:' . $customer_ids],
        ]);
    }
}
