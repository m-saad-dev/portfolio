<?php

namespace App\Providers;

use App\Repositories\Contracts\InfoRepositoryInterface;
use App\Repositories\Contracts\PortfolioRepositoryInterface;
use App\Repositories\Contracts\ServiceRepositoryInterface;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(PortfolioRepositoryInterface $portfolioRepository, ServiceRepositoryInterface $serviceProvider, InfoRepositoryInterface $infoRepository): void
    {
        View::composer('website.layouts.main', function ($view) use ($portfolioRepository, $serviceProvider, $infoRepository) {
            $portfolios = $portfolioRepository->getAllPortfolios();
            $services = $serviceProvider->getAllServices();
            $info = $infoRepository->getAllInfoPieces();
            $view->with([
                'portfolios'=> $portfolios,
                'services'=> $services,
                'info'=> $info,
            ]);
        });

    }
}
