<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ImportController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\PlaningController;
use App\Http\Middleware\checkRequestJson;


Route::get('/test-hello', function (Request $request) {
    return response('Hello!');
  });

Route::get('/prices/{currency}', [ProductController::class, 'prices'])->name('prices');

