<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Método para relacionar con las Tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
