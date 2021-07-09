<?php

use App\Jobs\CompanyCreated;
use Illuminate\Support\Facades\Route;


Route::get('/teste', function () {
    CompanyCreated::dispatch('marcosmes@gmail.com')->onQueue('queue_email');
    
    return response()->json(['message' => 'success']);
});

Route::get('/', function () {
    return response()->json(['message' => 'success']);
});
