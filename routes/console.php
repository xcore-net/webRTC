<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;


Schedule::call(function () {
    DB::table('table22')->insert([
        'hiiii' => 'hiten'
    ]);
})->everyTenSeconds();



Schedule::command('queue:work --stop-when-empty')->everyMinute();

// Schedule::command('schedule:list')->everyThirtySeconds();

//php artisan schedule:list
