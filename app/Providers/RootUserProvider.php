<?php

namespace App\Providers;


use App\User;

use Illuminate\Support\ServiceProvider;

class RootUserProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        User::saving(function($user) {
            /* if(User::count() == 0) {
                $user->jobgroup = 'application_supervisor';
            } */
            return true;
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
