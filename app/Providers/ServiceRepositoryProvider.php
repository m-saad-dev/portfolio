<?php

namespace App\Providers;

use App\Repositories\Contracts\ServiceRepositoryInterface;
use App\Repositories\ServiceRepository;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class ServiceRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {        
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
