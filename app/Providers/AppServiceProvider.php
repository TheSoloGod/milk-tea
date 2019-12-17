<?php

namespace App\Providers;

use App\Repositories\ProductRepository\ProductRepository;
use App\Repositories\ProductRepository\ProductRepositoryInterface;
use App\Repositories\StoreRepository\StoreRepository;
use App\Repositories\StoreRepository\StoreRepositoryInterface;
use App\Repositories\ToppingRepository\ToppingRepository;
use App\Repositories\ToppingRepository\ToppingRepositoryInterface;
use App\Services\ProductService\ProductService;
use App\Services\ProductService\ProductServiceInterface;
use App\Services\StoreService\StoreService;
use App\Services\StoreService\StoreServiceInterface;
use App\Services\ToppingService\ToppingService;
use App\Services\ToppingService\ToppingServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            StoreRepositoryInterface::class,
            StoreRepository::class
        );

        $this->app->singleton(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );

        $this->app->singleton(
            ToppingRepositoryInterface::class,
            ToppingRepository::class
        );

        $this->app->singleton(
            StoreServiceInterface::class,
            StoreService::class
        );

        $this->app->singleton(
            ProductServiceInterface::class,
            ProductService::class
        );

        $this->app->singleton(
            ToppingServiceInterface::class,
            ToppingService::class
        );

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
