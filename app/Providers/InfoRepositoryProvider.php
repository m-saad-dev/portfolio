<?php

namespace App\Providers;

use App\Repositories\Contracts\InfoRepositoryInterface;
use App\Repositories\InfoRepository;
use Illuminate\Support\ServiceProvider;

class InfoRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {        
        $this->app->bind(InfoRepositoryInterface::class, InfoRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
