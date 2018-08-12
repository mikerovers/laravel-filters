<?php

namespace Mikerovers\LaravelFilters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

trait Filterable {
	public static function filter(string $filterCollection, Builder $builder, Request $request): Builder
	{
		return (new $filterCollection($request))->filter($builder);
	}
}
