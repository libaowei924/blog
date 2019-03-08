<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articletype extends Model
{
    public function getRouteKeyName()
    {
        return 'type';
    }
}
