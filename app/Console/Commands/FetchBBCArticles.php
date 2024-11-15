<?php

namespace App\Console\Commands;

use App\Services\BBCArticles;
use Exception;
use Illuminate\Console\Command;

class FetchBBCArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-bbc-articles {category} {--limit=5}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch articles from the BBC API';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @throws Exception
     */
    public function handle(): void
    {
        $category = (string) $this->argument('category');
        $limit = (int) $this->option('limit');

        $bbc = new BBCArticles;

        $bbc->fetchArticles($category, $limit);

        $this->info('Stored news');
    }
}
