<?php

namespace App\Policies;

use App\Models\SharedFolderEmail;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SharedFolderEmailPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, SharedFolderEmail $sharedFolderEmail): bool
    {
        return $user->id === $sharedFolderEmail->sharedFolder->folder->user_id;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, SharedFolderEmail $sharedFolderEmail): bool
    {
        return $user->id === $sharedFolderEmail->sharedFolder->folder->user_id;
    }

    public function delete(User $user, SharedFolderEmail $sharedFolderEmail): bool
    {
        return $user->id === $sharedFolderEmail->sharedFolder->folder->user_id;
    }
}
