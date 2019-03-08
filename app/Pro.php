<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pro extends Model
{
    protected $fillable = [
        'name', 'pw', 'role','states'
    ];

    protected $hidden = [
        'pw',
    ];
}
