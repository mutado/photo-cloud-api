<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Symfony\Component\HttpFoundation\InputBag;

class FilterBuilder
{
    protected Builder $query;
    protected InputBag $filters;
    protected string $namespace;

    /**
     * @param Builder $query
     * @param InputBag $filters
     * @param string $namespace
     */
    public function __construct(Builder $query, InputBag $filters, string $namespace)
    {
        $this->query = $query;
        $this->filters = $filters;
        $this->namespace = $namespace;
    }

    /**
     * Apply the filters to the query
     * @return Builder
     */
    public function apply(): Builder
    {
        // Apply all filters
        foreach ($this->filters as $name => $value) {
            $normalizedName = str_replace('_', '', ucwords($name, '_'));
            $class = $this->namespace . "\\{$normalizedName}Filter";

            // Check if filter exists
            if (!class_exists($class)) {
                continue;
            }

            // remove null values from array
            if (is_array($value)) {
                $value = array_filter($value, fn($v) => !is_null($v));
            }

            // apply filter
            if (is_null($value)) {
                (new $class($this->query))->handle();
            } else {
                (new $class($this->query))->handle($value);
            }
        }

        return $this->query;
    }
}
