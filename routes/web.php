<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::prefix('about')->group(function () {
    Route::get('/vision-and-mission', function () {
        return view('about.vision-mission');
    });

    Route::get('/core-values', function () {
        return view('about.core-values');
    });

    Route::get('/perspective-plan', function () {
        return view('about.perspective-plan');
    });

    Route::get('/quality-policy', function () {
        return view('about.quality-policy');
    });

    Route::get('/history', function () {
        return view('about.history');
    });
});
