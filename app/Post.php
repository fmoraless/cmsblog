<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'user_id','category_id','name','slug','excerpt','body','status','file'
    ];

    // //RELACIONES // //

    //un Post pertenece a un Usuario
    public function user()
    {
        return $this->belongsTo(User::tag);
    }
    //un Post pertenece a una Categoria
    public function category()
    {
        return $this->belongsTo(Category::tag);
    }

    //Un Post puede estar relacionado con muchas etiquetas
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
