<?php

namespace Lorisleiva\Lody;

use Illuminate\Support\ServiceProvider;

class LodyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(LodyManager::class);
    }
}
