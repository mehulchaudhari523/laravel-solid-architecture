<?php

namespace App\Providers;

use App\Repositories\Admin\Product\ProductInterface;
use App\Repositories\Admin\Product\ProductRepository;
use App\Repositories\Auth\Login\LoginInterface;
use App\Repositories\Auth\Login\LoginRepository;
use App\Repositories\Auth\Register\RegisterInterface;
use App\Repositories\Auth\Register\RegisterRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(LoginInterface::class, LoginRepository::class);
        $this->app->bind(RegisterInterface::class, RegisterRepository::class);
        $this->app->bind(ProductInterface::class, ProductRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
