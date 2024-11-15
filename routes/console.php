<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command("app:fetch-nyt-articles climate change --limit=5")->daily();
Artisan::command("app:fetch-bbc-articles technology --limit=5")->daily();
Artisan::command("app:fetch-bbc-articles technology --limit=5")->daily();
