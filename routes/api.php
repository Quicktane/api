<?php

use Illuminate\Support\Facades\Route;
use Quicktane\Api\Controllers\AttributeController;
use Quicktane\Api\Controllers\AttributeOptionController;
use Quicktane\Api\Controllers\CategoryController;

//todo move it to class which register this file
Route::middleware('api')->prefix('api')->group(function () {
    Route::post('categories', [CategoryController::class, 'create']);

    // todo ??? collection or pagination ???
//    Route::post('attributes', [AttributeController::class, 'collection']);
    Route::get('attributes', [AttributeController::class, 'list']);
    Route::get('attributes/{id}', [AttributeController::class, 'find']);

    Route::post('attributes', [AttributeController::class, 'create']);
    Route::put('attributes/{id}', [AttributeController::class, 'update']);

    Route::get('attributes/{id}/options', [AttributeOptionController::class, 'collectionForAttribute']);
});
