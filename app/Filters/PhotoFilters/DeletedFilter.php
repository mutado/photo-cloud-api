<?php

namespace App\Filters\PhotoFilters;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DeletedFilter extends \App\Filters\QueryFilter implements \App\Filters\FilterContract
{

    /**
     * @inheritDoc
     */
    public function handle($value = ""): void
    {
        $this->query->withoutGlobalScope(SoftDeletingScope::class);
        $this->query->whereNot('deleted_at', null);
    }
}
