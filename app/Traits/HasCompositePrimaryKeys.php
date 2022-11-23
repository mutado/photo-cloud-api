<?php

namespace App\Traits;

use App\Models\SharedFolderEmail;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Trait HasCompositePrimaryKeys
 * @package App\Traits
 */
trait HasCompositePrimaryKeys
{
    /**
     * Get the value indicating whether the IDs are incrementing.
     *
     * @return bool
     */
    public function getIncrementing(): bool
    {
        return false;
    }

    /**
     * Set the keys for a save update query.
     *
     * @param Builder $query
     *
     * @return Builder
     * @throws Exception
     */
    protected function setKeysForSaveQuery($query): Builder
    {
        foreach ($this->getKeyName() as $key) {
            if (!isset($this->$key)) {
                throw new Exception(__METHOD__ . 'Missing part of the primary key: ' . $key);
            }

            $query->where($key, '=', $this->$key);
        }

        return $query;
    }

    /**
     * Execute a query for a single record by ID.
     *
     * @param array $ids Array of keys, like [column => value].
     * @param array $columns
     *
     * @return Model|null
     */
    public static function find(array $ids, array $columns = ['*']): Model|null
    {
        $me = new self;
        $query = $me->newQuery();
        foreach ($me->getKeyName() as $key) {
            $query->where($key, '=', $ids[$key]);
        }

        return $query->first($columns);
    }
}
