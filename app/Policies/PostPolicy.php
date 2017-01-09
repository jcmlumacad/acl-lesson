<?php

namespace App\Policies;

use App\User;
use App\Post;

class PostPolicy
{
    public function update(User $user, Post $post)
    {
        return $user->owns($post);
    }
}
