<?php

namespace App\Filters;

interface FilterContract
{
    /**
     * Apply the filter to the query
     * @param $value
     * @return void
     */
    public function handle($value): void;
}
