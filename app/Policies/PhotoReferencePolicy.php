<?php

namespace App\Policies;

use App\Models\PhotoReference;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PhotoReferencePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, PhotoReference $photoReference): bool
    {
        return $user->id === $photoReference->photo->user_id;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, PhotoReference $photoReference): bool
    {
        return false;
    }

    public function delete(User $user, PhotoReference $photoReference): bool
    {
        return $user->id === $photoReference->photo->user_id;
    }
}
