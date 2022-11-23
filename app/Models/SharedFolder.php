<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

/**
 * App\Models\SharedFolder
 *
 * @property string $id
 * @property string $folder_id
 * @property string $user_id
 * @property boolean $is_public
 * @property boolean $is_password_protected
 * @property string|null $password
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Folder $folder
 * @property Collection|SharedFolderEmail[] $emails
 */
class SharedFolder extends Model
{
    use Uuids;

    protected $fillable = [
        'folder_id',
        'user_id',
        'is_public',
        'is_password_protected',
        'password',
    ];

    protected $casts = [
        'is_public' => 'boolean',
        'is_password_protected' => 'boolean',
    ];

    protected $hidden = [
        'password',
    ];

    /**
     * @return BelongsTo
     */
    public function folder(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Folder::class);
    }

    /**
     * @return HasMany
     */
    public function emails(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(SharedFolderEmail::class);
    }
}
