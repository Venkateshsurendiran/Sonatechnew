<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about/vision-mission', function () {
    return view('about.vision-mission');
});

Route::get('/about/core-values', function () {
    return view('about.core-values');
});

Route::get('/about/perspective-plan', function () {
    return view('about.perspective-plan');
});

Route::get('/about/quality-policy', function () {
    return view('about.quality-policy');
});

Route::get('/about/management-profile', function () {
    return view('about.management-profile');
});
