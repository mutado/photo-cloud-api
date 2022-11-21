<?php

namespace App\Policies;

use App\Models\OriginalPhoto;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OriginalPhotoPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, OriginalPhoto $originalPhoto): bool
    {
        return $user->id === $originalPhoto->user_id;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, OriginalPhoto $originalPhoto): bool
    {
        return $user->id === $originalPhoto->user_id;
    }

    public function delete(User $user, OriginalPhoto $originalPhoto): bool
    {
        return $user->id === $originalPhoto->user_id;
    }
}
