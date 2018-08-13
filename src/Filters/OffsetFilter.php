<?php

namespace MikeRovers\LaravelFilters\Filters;

use Illuminate\Database\Eloquent\Builder;
use Mikerovers\LaravelFilters\Exception\InvalidQueryException;
use Mikerovers\LaravelFilters\FilterInterface;

class OffsetFilter implements FilterInterface {

	public function filter(Builder $builder, $value): Builder
	{
		if ($value >= 0) {
			return $builder->skip( $value );
		}

		if (config('laravel-filters.throw_exception')) {
			throw new InvalidQueryException('Offset has an invalid value: ' . $value);
		}

		return $builder;
	}
}
