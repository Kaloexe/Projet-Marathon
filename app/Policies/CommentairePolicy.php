<?php

namespace App\Policies;

use App\Models\Commentaire;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentairePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        function isAdmin(User $user, Commentaire $commentaire) {
            return $user->id === $commentaire->jeu->createur->user_id;
        }

        function update(User $user, Commentaire $commentaire) {
            return $user->id === $commentaire->user_id;
        }


        function delete(User $user, Commentaire $commentaire) {
            return $user->id === $commentaire->user->user_id;
        }

    }
}
