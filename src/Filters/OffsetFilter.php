<?php

namespace MikeRovers\LaravelFilters\Filters;

use Illuminate\Database\Eloquent\Builder;
use Mikerovers\LaravelFilters\FilterInterface;

class OffsetFilter implements FilterInterface {

	public function filter(Builder $builder, $value): Builder {
		return $builder->offset($value);
	}
}
