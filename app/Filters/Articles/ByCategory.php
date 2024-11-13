<?php

namespace App\Filters\Articles;

use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ByCategory
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
                $this->request->input('category'),
                fn($query) => $query->where('category', 'LIKE', "%{$this->request->input('category')}%")
            );
    }
}
