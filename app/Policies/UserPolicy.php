<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function follow(User $user, User $toBeFollowed)
    {
        return $user->id !== $toBeFollowed->id;
    }



    public function __construct()
    {
        //
    }
}
