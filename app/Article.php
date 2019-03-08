<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
        'name', 'describe', 'content','image','class'
    ];

    public function article_type()
    {
        return $this->hasOne('App\articletype','id','class');
    }
}
