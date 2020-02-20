<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class career extends Model
{
    protected $fillable = ['username', 'email', 'password'];

    public function detail_career()
    {
        return $this->hasOne('App\detail_career');
    }
    public function address_career()
    {
        return $this->hasOne('App\address_career');
    }
}
