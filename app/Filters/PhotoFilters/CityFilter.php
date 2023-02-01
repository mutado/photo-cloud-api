<?php

namespace App\Filters\PhotoFilters;

class CityFilter extends \App\Filters\QueryFilter implements \App\Filters\FilterContract
{

    /**
     * @inheritDoc
     */
    public function handle($value = ""): void
    {
        $this->query->where('city', $value);
    }
}
