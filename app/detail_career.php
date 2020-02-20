<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_career extends Model
{
    protected $fillable = ['name', 'applied_position', 'gender', 'marital_status', 'place_of_birth', 'date_of_birth', 'height', 'weight', 'religion',];
}
