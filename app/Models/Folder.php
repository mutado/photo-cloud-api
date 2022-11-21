<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Folder
 *
 * @property string $id
 * @property string $user_id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class Folder extends Model
{
    use Uuids;

    protected $fillable = [
        'user_id',
        'name',
    ];
}
