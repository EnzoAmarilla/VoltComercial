<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/index', 'index');
});

// Locale
Route::get('/locale/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});