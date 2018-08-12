<?php

namespace Mikerovers\LaravelFilters\Filters;

use Illuminate\Database\Eloquent\Builder;
use Mikerovers\LaravelFilters\FilterInterface;

class LimitFilter implements FilterInterface {

	public function filter(Builder $builder, $value): Builder {
		return $builder->limit($value);
	}
}
