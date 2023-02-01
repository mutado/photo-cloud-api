<?php

namespace App\Filters\PhotoFilters;

class FavoriteFilter extends \App\Filters\QueryFilter implements \App\Filters\FilterContract
{

    /**
     * @inheritDoc
     */
    public function handle($value = true): void
    {
        $this->query->where('favorite', $value);
    }
}
