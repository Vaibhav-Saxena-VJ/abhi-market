<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index-slider');
});

Route::get('/insights', function () {
    return view('frontend.insights');
});

Route::get('/industries', function () {
    return view('frontend.industries');
});

Route::get('/services', function () {
    return view('frontend.services');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/service-details', function () {
    return view('frontend.service-details');
});

Route::get('/admin-dash', function () {
    return view('backend.admin-dash');
});

Route::get('/sign-in', function () {
    return view('backend.sign-in');
});

Route::get('/sign-up', function () {
    return view('backend.sign-up');
});

Route::get('/user', function () {
    return view('backend.user');
});