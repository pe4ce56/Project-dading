<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address_career extends Model
{
    protected $fillable = ['street', 'city', 'province', 'phone_number', 'telephone_number'];
}
