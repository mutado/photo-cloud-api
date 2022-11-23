<?php

namespace App\Policies;

use App\Models\SharedFolder;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SharedFolderPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, SharedFolder $sharedFolder): bool
    {
        return $user->id === $sharedFolder->folder->user_id;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, SharedFolder $sharedFolder): bool
    {
        return $user->id === $sharedFolder->folder->user_id;
    }

    public function delete(User $user, SharedFolder $sharedFolder): bool
    {
        return $user->id === $sharedFolder->folder->user_id;
    }
}
