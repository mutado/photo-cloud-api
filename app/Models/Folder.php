<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

/**
 * App\Models\Folder
 *
 * @property string $id
 * @property string $user_id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property-read User $user
 * @property-read Collection|PhotoReference[] $photoReferences
 * @property-read Collection|OriginalPhoto[] $photos
 * @property-read SharedFolder $sharedFolder
 */
class Folder extends Model
{
    use Uuids;

    protected $fillable = [
        'user_id',
        'name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function photos()
    {
        return $this->hasManyThrough(OriginalPhoto::class, PhotoReference::class, 'folder_id', 'id', 'id', 'photo_id');
    }

    public function photoReferences()
    {
        return $this->hasMany(PhotoReference::class);
    }

    /**
     * @return HasOne
     */
    public function sharedFolder(): HasOne
    {
        return $this->hasOne(SharedFolder::class);
    }
}
