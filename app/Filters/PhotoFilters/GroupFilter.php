<?php

namespace App\Filters\PhotoFilters;

class GroupFilter extends \App\Filters\QueryFilter implements \App\Filters\FilterContract
{

    /**
     * @inheritDoc
     */
    public function handle($value): void
    {
        $this->query->selectRaw('city, COUNT(*) as count');
        if ($value === 'cities')
            $this->query->groupBy('city');
    }
}
