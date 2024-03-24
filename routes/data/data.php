<?php
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SellController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\WelcomeController;

Route::resource('sliders',SliderController::class)->names('sliders');
Route::resource('welcome',WelcomeController::class)->names('welcome');
Route::resource('bookingconfirm',BookingController::class)->names('bookingconfirm');
Route::resource('buy',BuyController::class)->names('buy');
Route::resource('sell',SellController::class)->names('sell');
Route::resource('report',ReportController::class,)->names('report');
Route::resource('client',ClientController::class,)->names('client');
Route::resource('dashboard',DashController::class,)->names('dashboard');
