<?php

namespace App\Policies;

use App\Models\Preference;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PreferencePolicy
{
    public function view(User $user, Preference $preference): Response
    {
        return $this->userHasPermission($user, $preference);
    }

    public function update(User $user, Preference $preference): Response
    {
        return $this->userHasPermission($user, $preference);
    }

    public function delete(User $user, Preference $preference): Response
    {
        return $this->userHasPermission($user, $preference);
    }

    private function userHasPermission(User $user, Preference $preference): Response
    {
        return $preference->user_id === $user->id
            ? Response::allow()
            : Response::deny('You do not have right permission to perform this action.');
    }
}
