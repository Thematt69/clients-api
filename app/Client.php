<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['guid', 'first', 'last', 'street', 'city', 'zip'];
}
