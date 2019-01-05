<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name','slug','body'
    ];

    // //RELACIONES // //

    //Una Categoría puede tener muchos Posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
