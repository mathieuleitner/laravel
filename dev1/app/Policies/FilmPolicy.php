<?php

namespace App\Policies;

use App\{ User, Film };
use Illuminate\Auth\Access\HandlesAuthorization;

class FilmPolicy
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

    public function manage(User $user, Film $film)
    {
        return $user->id === $film->user_id;
    }
}
