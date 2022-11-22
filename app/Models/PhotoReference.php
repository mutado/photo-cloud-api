<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\PhotoReference
 *
 * @property string $id
 * @property string $folder_id
 * @property string $photo_id
 * @property-read Folder $folder
 * @property-read Photo $photo
 */
class PhotoReference extends Model
{
    use Uuids;

    protected $fillable = [
        'folder_id',
        'photo_id',
    ];

    public function folder(): BelongsTo
    {
        return $this->belongsTo(Folder::class);
    }

    public function photo(): BelongsTo
    {
        return $this->belongsTo(OriginalPhoto::class);
    }
}
