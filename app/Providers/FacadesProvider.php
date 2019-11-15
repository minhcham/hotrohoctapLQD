<?php

namespace App\Providers;

use App\Helpers\SendMailHelper;
use Illuminate\Support\ServiceProvider;

class FacadesProvider extends ServiceProvider
{
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
        $this->app->singleton('send_mail_helper', function () {
            return new SendMailHelper();
        });
    }
}
