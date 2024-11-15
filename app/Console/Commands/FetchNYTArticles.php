<?php

namespace App\Console\Commands;

use App\Services\NewYorkTimes;
use Exception;
use Illuminate\Console\Command;

class FetchNYTArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-nyt-articles {query} {--limit=5}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch articles from the New York Times API';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     * @throws Exception
     */
    public function handle(): void
    {
        $query = (string) $this->argument('query');
        $limit = (int) $this->option('limit');

        $nyTimes = new NewYorkTimes();

        $nyTimes->fetchArticles($query, $limit);

        $this->info("Stored news");
    }
}
