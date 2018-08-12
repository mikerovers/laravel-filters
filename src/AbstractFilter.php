<?php

namespace Mikerovers\LaravelFilters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Mikerovers\LaravelFilters\Filters\LimitFilter;
use Mikerovers\LaravelFilters\Filters\OffsetFilter;

class AbstractFilter {
	protected $request;
	protected $filters = [
		'limit' => LimitFilter::class,
		'offset' => OffsetFilter::class
	];

	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	public function filter(Builder $builder): Builder
	{
		foreach ($this->getFilters() as $filter => $value) {
			$this->resolveFilter($filter)->filter($builder, $value);
		}

		return $builder;
	}

	public function getFilters(): array
	{
		return array_filter($this->request->only(array_keys($this->filters)));
	}

	protected function resolveFilter(string $filter): FilterInterface
	{
		return new $this->filters[$filter]();
	}
}
