<?php

namespace Quicktane\Api;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class QuicktaneServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        JsonResource::withoutWrapping();
        Route::pattern('id', '[0-9]+');

        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
    }
}
