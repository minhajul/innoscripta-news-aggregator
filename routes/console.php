<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('app:fetch-nyt-articles climate change --limit=5', function () {
    $this->info('Fetching articles from nyt is done.');
})->daily();

Artisan::command('app:fetch-bbc-articles technology --limit=5', function () {
    $this->info('Fetching articles from bbc is done.');
})->daily();

Artisan::command('app:fetch-guardian-articles technology --limit=5', function () {
    $this->info('Fetching articles from guardian is done.');
})->daily();
