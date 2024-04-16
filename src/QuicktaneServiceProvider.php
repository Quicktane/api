<?php

namespace Quicktane\Api;

use Illuminate\Support\ServiceProvider;

class QuicktaneServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
    }
}