<?php

use App\Http\Controllers\JobController;
use App\Jobs\RedirectMe;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dispatch-job', [JobController::class,'dis']);

Route::get('/page',function(){
    return view('page');
});