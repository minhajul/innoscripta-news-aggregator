<?php

namespace App\Console\Commands;

use App\Services\TheGuardian;
use Exception;
use Illuminate\Console\Command;

class FetchGuardianArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-guardian-articles {query} {--limit=5}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch articles from the guardian API';

    /**
     * Execute the console command.
     * @throws Exception
     */
    public function handle(): void
    {
        $query = (string)$this->argument('query');
        $limit = (int)$this->option('limit');

        $theGuardian = new TheGuardian();

        $theGuardian->fetchArticles($query, $limit);

        $this->info("Stored news");
    }
}
