<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class UserStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:user-status';

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
        User::query()->update(['status' => '1']);
        info('Command runs every minute.');
    }
}
