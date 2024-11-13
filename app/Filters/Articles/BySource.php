<?php

namespace App\Filters\Articles;

use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class BySource
{
    public function __construct(
        protected Request $request
    )
    {
        //
    }

    public function handle(Builder $builder, Closure $next)
    {
        return $next($builder)
            ->when(
                $this->request->input('source'),
                fn($query) => $query->where('source', 'LIKE', "%{$this->request->input('source')}%")
            );
    }
}
