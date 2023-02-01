<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

/**
 * Class QueryFilter
 * Base class for filtering.
 * @package App\Filters
 */
abstract class QueryFilter
{
    protected Builder $query;

    public function __construct(Builder $query)
    {
        $this->query = $query;
    }
}
