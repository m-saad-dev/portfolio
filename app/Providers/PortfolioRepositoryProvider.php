<?php

namespace App\Providers;

use App\Repositories\Contracts\PortfolioRepositoryInterface;
use App\Repositories\Contracts\ServiceRepositoryInterface;
use App\Repositories\PortfolioRepository;
use App\Repositories\ServiceRepository;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class PortfolioRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {        
        $this->app->bind(PortfolioRepositoryInterface::class, PortfolioRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
