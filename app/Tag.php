<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name','slug'
    ];

    // //RELACIONES // //

    //Una Categoría puede tener muchos Posts
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
