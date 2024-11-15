<?php

namespace App\Filters\Articles;

use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ByDate
{
    public function __construct(
        protected Request $request
    ) {
        //
    }

    public function handle(Builder $builder, Closure $next)
    {
        return $next($builder)
            ->when(
                $this->request->input('date'),
                fn ($query) => $query->whereDate('created_at', $this->request->input('date'))
            );
    }
}
