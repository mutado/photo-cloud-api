<?php

namespace App\Filters\PhotoFilters;

class CountryFilter extends \App\Filters\QueryFilter implements \App\Filters\FilterContract
{

    /**
     * @inheritDoc
     */
    public function handle($value = ""): void
    {
        $this->query->where('country', $value);
    }
}
