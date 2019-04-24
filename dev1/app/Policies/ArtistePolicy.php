<?php

namespace App\Policies;

use App\Models\ {User, Artiste};
use Illuminate\Auth\Access\HandlesAuthorization;

class ArtistePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function create(User $user, Artiste $artiste)
    {
        return $user->id === $artiste->user_id; //
    }
    
    public function edit(User $user, Artiste $artiste)
    {
        return $user->id === $artiste->user_id; //
    }
}
