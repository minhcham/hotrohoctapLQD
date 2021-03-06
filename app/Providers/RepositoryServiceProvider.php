<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public $bindings = [
        \App\Repositories\Mon\MonRepositoryInterface::class => \App\Repositories\Mon\MonRepository::class,
        \App\Repositories\Image\ImageRepositoryInterface::class => \App\Repositories\Image\ImageRepository::class,
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
