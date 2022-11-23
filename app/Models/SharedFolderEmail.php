<?php

namespace App\Models;

use App\Traits\HasCompositePrimaryKeys;
use App\Traits\Uuids;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\SharedFolderEmail
 *
 * @property string $shared_folder_id
 * @property string $email
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property-read SharedFolder $sharedFolder
 */
class SharedFolderEmail extends Model
{
    use HasCompositePrimaryKeys;

    protected $primaryKey = ['shared_folder_id', 'email'];

    protected $fillable = [
        'shared_folder_id',
        'email',
    ];

    /**
     * @return BelongsTo
     */
    public function sharedFolder(): BelongsTo
    {
        return $this->belongsTo(SharedFolder::class);
    }
}
