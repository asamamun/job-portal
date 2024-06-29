<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Functional;
use App\Models\Industrial;
use App\Models\Special;
use Illuminate\Support\Facades\Storage;

class CreateCategoriesJson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-categories-json';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filePath = public_path('cat.json');
        if (!file_exists($filePath)) {
            unlink($filePath);
        }
        file_put_contents($filePath, '');
        $functional = Functional::all();
        $industrial = Industrial::all();
        $special = Special::all();
        $categories = [
            'functional' => $functional,
            'industrial' => $industrial,
            'special' => $special
        ];
        file_put_contents($filePath, json_encode($categories, JSON_PRETTY_PRINT));
    }
}
