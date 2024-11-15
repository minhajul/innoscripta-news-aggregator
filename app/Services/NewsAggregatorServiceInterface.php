<?php

namespace App\Services;

interface NewsAggregatorServiceInterface
{
    public function fetchArticles(string $query, int $limit): void;
}
