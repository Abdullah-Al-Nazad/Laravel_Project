<?php
use Illuminate\Support\Facades\Route;
Route::get('/blog-details', function () {
    return view('Pages/blog-details');
});
Route::get('/contact', function () {
    return view('Pages/contact');
});
Route::get('/about', function () {
    return view('Pages/about');
});
Route::get('/gallery', function () {
    return view('Pages/gallery');
});
Route::get('/menu', function () {
    return view('Pages/menu');
});
Route::get('/reservation', function () {
    return view('Pages/reservation');
});

Route::get('/blog', function () {
    return view('Pages/blog');
});

Route::get('/', function () {
    return view('welcome');
});