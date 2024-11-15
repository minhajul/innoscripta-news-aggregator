<?php

namespace App\Filters\Articles;

use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ByKeywords
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
                $this->request->input('keywords'),
                fn ($query) => $query->whereLike(['title', 'content', 'description'], $this->request->input('keywords'))
            );
    }
}
