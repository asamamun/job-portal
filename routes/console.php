<?php

use Illuminate\Support\Facades\Schedule;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Schedule::command('app:user-status')->daily();

Artisan::command('clearall', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    $this->info('Cleared!');
})->purpose('Clear all caches');
    
