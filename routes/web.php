<?php

use App\Http\Controllers\CacheController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TranslationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log; // Added this line to import the Log facade
use App\Http\Controllers\TranslateController;
use App\Models\User;
use Illuminate\Support\Facades\Context;


Route::get('/', function () {
    $account = request()->input('account',1);
    Context::add('selected_account',[$account]);
    
    
    Log::info('this should show all queries');
    return view('welcome');
});

Route::get('/dispatch-job', [JobController::class,'dis']);

Route::get('/page',function(){
    return view('page');
});
Route::get('/page2',function(){
    return view('page2');
});
Route::get('/collection',[JobController::class, 'coll']);

Route::get('/translate', [TranslationController::class, 'translate'])->name('translate');

Route::get('/cachetest',[CacheController::class, 'index']);

Route::get('mailsend',[MailController::class,'sendmail']);


Route::get('/translate', [TranslateController::class, 'translateEn'])->name('translate');
Route::get('/translateE', [TranslateController::class, 'translateAr'])->name('translateA');