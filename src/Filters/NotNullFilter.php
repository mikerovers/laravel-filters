<?php

namespace Mikerovers\LaravelFilters\Filters;

use Illuminate\Database\Eloquent\Builder;
use MikeRovers\LaravelFilters\FilterInterface;

class NotNullFilter implements FilterInterface {

	public function filter(Builder $builder, $value): Builder
	{
		return $builder->whereNotNull($value);
	}
}
