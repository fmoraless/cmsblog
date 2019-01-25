<?php

namespace App\Policies;

use App\User;
use App\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function pass(User $user, Post $post)
    {
        return $user->id == $post->user_id;
        //si es id 50 y el post que estoy editando tiene el user_id 50
        //quiere decir que el post es mio. y retornará true
    }
}
