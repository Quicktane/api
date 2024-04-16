<?php

use Illuminate\Support\Facades\Route;
use Quicktane\Api\Controllers\CategoryController;

Route::middleware('api')->prefix('api')->group(function () {
    Route::post('categories', [CategoryController::class, 'create']);
});