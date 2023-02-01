<?php

namespace App\Models;

use App\Filters\FilterBuilder;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Models\OriginalPhoto
 *
 * @property string $id
 * @property string $path
 * @property string $user_id
 * @property string $country
 * @property string $city
 * @property array $tags
 * @property bool $favorite
 * @property bool $hidden
 * @property Carbon|null $photo_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $user
 */
class OriginalPhoto extends Model
{
    use Uuids, SoftDeletes;

    protected $fillable = [
        'path',
        'user_id',
        'favorite',
        'hidden',
        'tags',
        'country',
        'city',
        'photo_date',
    ];

    protected $casts = [
        'favorite' => 'boolean',
        'hidden' => 'boolean',
        'tags' => 'array',
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return HasMany
     */
    public function photoReferences(): HasMany
    {
        return $this->hasMany(PhotoReference::class,'photo_id');
    }

    public function scopeFilterBy($query, $filters)
    {
        $namespace = 'App\Filters\PhotoFilters';
        $filter = new FilterBuilder($query, $filters, $namespace);

        return $filter->apply();
    }
}
