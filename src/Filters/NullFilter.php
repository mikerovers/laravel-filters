<?php

namespace Mikerovers\LaravelFilters\Filters;

use Illuminate\Database\Eloquent\Builder;
use Mikerovers\LaravelFilters\Exception\InvalidQueryException;
use MikeRovers\LaravelFilters\FilterInterface;

class NullFilter implements FilterInterface {

	public function filter(Builder $builder, $value): Builder
	{
		return $builder->whereNull($value);
	}
}
