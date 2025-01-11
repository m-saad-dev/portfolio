<?php

namespace App\Providers;

use App\Repositories\Contracts\MessageRepositoryInterface;
use App\Repositories\Contracts\ServiceRepositoryInterface;
use App\Repositories\MessageRepository;
use App\Repositories\ServiceRepository;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class MessageRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {        
        $this->app->bind(MessageRepositoryInterface::class, MessageRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
