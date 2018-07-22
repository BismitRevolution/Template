<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $primaryKey = 'tag_id';

    public function posts()
    {
        return $this->belongsToMany('App\Post')
        ->withTimestamps();
    }
}
