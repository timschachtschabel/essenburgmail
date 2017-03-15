<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;

    public static function active() {

        return Customer::where('isActive', 1)->get();

    }

    public function caps() {

        return strtoupper($this->name);

    }

}